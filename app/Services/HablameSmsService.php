<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class HablameSmsService
{
    protected string $apiKey;
    protected string $cliente;
    protected string $endpointSend;
    protected string $endpointBalance;
    protected string $sender;
    protected int $timeout;

    public function __construct()
    {
        $this->apiKey = config('services.hablame.api');
        $this->cliente = config('services.hablame.cliente');
        $this->endpointSend = config('services.hablame.endpoint_send');
        $this->endpointBalance = config('services.hablame.endpoint_balance');
        $this->sender = config('services.hablame.sender');
        $this->timeout = (int) config('services.hablame.timeout', 10);
    }

    /**
     * Enviar SMS genérico.
     *
     * @param string $phone Ej: 573001234567
     * @param string $message
     * @param string|null $reference
     * @return array  ['success'=>bool,'status'=>int,'body'=>string,'json'=>array|null,'error'=>string|null]
     */
    public function send(string $phone, string $message, ?string $reference = null): array
    {
        $payload = [
            'cliente'    => $this->cliente,
            'api'        => $this->apiKey,
            'numero'     => $phone,
            'sms'        => $message,
            'referencia' => $reference ?? uniqid('sms_'),
            'remitente'  => $this->sender,
            'fecha'      => now()->format('Y-m-d H:i:s'),
        ];

        try {
            $resp = Http::asForm()
                ->timeout($this->timeout)
                ->post($this->endpointSend, $payload);

            $body = $resp->body();
            $json = null;
            try { $json = $resp->json(); } catch (Throwable $e) {}

            if ($resp->successful()) {
                return ['success' => true, 'status' => $resp->status(), 'body' => $body, 'json' => $json, 'error' => null];
            }

            Log::warning('Hablame SMS send failed', ['status' => $resp->status(), 'body' => $body]);
            return ['success' => false, 'status' => $resp->status(), 'body' => $body, 'json' => $json, 'error' => $body];

        } catch (Throwable $e) {
            Log::error('Hablame SMS exception', ['message' => $e->getMessage()]);
            return ['success' => false, 'status' => 0, 'body' => null, 'json' => null, 'error' => $e->getMessage()];
        }
    }

    /**
     * Enviar código de verificación OTP.
     */
    public function sendVerificationCode(string $phone, string $code): array
    {
        $message = "Tu código de verificación para BarberiasApp es: {$code}";
        return $this->send($phone, $message, 'verif');
    }

    /**
     * Consultar saldo (si la API lo expone así).
     */
    public function checkBalance(): array
    {
        try {
            $resp = Http::timeout($this->timeout)->get($this->endpointBalance, [
                'cliente' => $this->cliente,
                'api'     => $this->apiKey,
            ]);

            $body = $resp->body();
            $json = null;
            try { $json = $resp->json(); } catch (Throwable $e) {}

            if ($resp->successful()) {
                return ['success' => true, 'status' => $resp->status(), 'body' => $body, 'json' => $json, 'error' => null];
            }

            return ['success' => false, 'status' => $resp->status(), 'body' => $body, 'json' => $json, 'error' => $body];

        } catch (Throwable $e) {
            Log::error('Hablame checkBalance exception', ['message' => $e->getMessage()]);
            return ['success' => false, 'status' => 0, 'body' => null, 'json' => null, 'error' => $e->getMessage()];
        }
    }
}
