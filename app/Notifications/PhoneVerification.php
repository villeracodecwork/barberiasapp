<?php

namespace App\Notifications;

use App\Notifications\Channels\HablameChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class PhoneVerification extends Notification
{
    use Queueable;

    protected string $code;

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    public function via($notifiable): array
    {
        return ['database', 'hablame'];
    }

    public function toHablame($notifiable): string
    {
        return "Tu código de verificación para BarberiasApp es: {$this->code}";
    }

    public function toDatabase($notifiable): array
    {
        return [
            'title'   => 'Verificación',
            'message' => "Tu código de verificación es: {$this->code}",
        ];
    }
}
