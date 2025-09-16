<?php

namespace App\Notifications;

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
        return ['database', \App\Notifications\Channels\HablameChannel::class];
    }

    public function toHablame($notifiable): array
    {
        return [
            'to'       => $notifiable->routeNotificationForHablame(),
            'text'     => "Tu código de verificación es: {$this->code}",
            'reference'=> 'otp',
        ];
    }

    public function toDatabase($notifiable): array
    {
        return [
            'title'   => 'Verificación',
            'message' => "Tu código de verificación es: {$this->code}",
        ];
    }
}
