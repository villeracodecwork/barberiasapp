<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class HablameSmsService
{
    protected Client $client;
    protected string $apiKey;
    protected bool $flash;
    protected bool $priority;
    protected bool $certificate;


    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://www.hablame.co/api/sms/v5/',
            'timeout'  => 5.0,
        ]);

        $this->apiKey      = config('services.hablame.api_key');
        $this->flash       = config('services.hablame.flash');
        $this->priority    = config('services.hablame.priority');
        $this->certificate = config('services.hablame.certificate');
    }

    public function sendSms(string $to, string $message): bool
    {
        try {
            $response = $this->client->post('send', [
                'json' => [
                    'messages' => [
                        [
                            'to'   => $to,
                            'text' => $message,
                        ],
                    ],
                    'flash'       => $this->flash,
                    'priority'    => $this->priority,
                    'certificate' => $this->certificate,
                    "from" => "barberiasapp",
                    "campaignName" => "Barberias app",

                ],
                'headers' => [
                    'accept'          => 'application/json',
                    'content-type'    => 'application/json',
                    'X-Hablame-Key'   => $this->apiKey,

                ],
            ]);

            return $response->getStatusCode() === 200;

        } catch (RequestException $e) {
            dd("fallo ",$e->getResponse()->getBody());
            return false;
        }
    }

    /**
     * Enviar código de verificación OTP.
     */
    public function sendVerificationCode(string $phone, string $code)
    {
        $message = "Tu código de verificación para BarberiasApp es: {$code}";
        return $this->sendSms($phone, $message);
    }

    /**
     * Consultar saldo (si la API lo expone así).
     */
   /*  public function checkBalance(): array
    {
        try {
            $resp = Http::timeout($this->timeout)->get($this->endpointBalance, [
                'cliente' => $this->cliente,
                'api'     => $this->apiKey,
            ]);

            $body = $resp->body();
            $json = null;
            try {
                $json = $resp->json();
            } catch (Throwable $e) {
            }

            if ($resp->successful()) {
                return ['success' => true, 'status' => $resp->status(), 'body' => $body, 'json' => $json, 'error' => null];
            }

            return ['success' => false, 'status' => $resp->status(), 'body' => $body, 'json' => $json, 'error' => $body];
        } catch (Throwable $e) {
            Log::error('Hablame checkBalance exception', ['message' => $e->getMessage()]);
            return ['success' => false, 'status' => 0, 'body' => null, 'json' => null, 'error' => $e->getMessage()];
        }
    } */
}
