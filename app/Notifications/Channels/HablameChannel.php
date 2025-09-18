<?php

namespace App\Notifications\Channels;

use App\Services\HablameSmsService;
use Illuminate\Notifications\Notification;

class HablameChannel
{

    public function send($notifiable, Notification $notification)
    {
        if (method_exists($notification, 'toHablame')) {
            
            $message = $notification->toHablame($notifiable);

            // Aquí va la lógica para enviar el SMS usando tu servicio Hablame
            app(HablameSmsService::class)->sendSms(
                $notifiable->routeNotificationForHablame(),
                $message
            );
        }
    }
}
