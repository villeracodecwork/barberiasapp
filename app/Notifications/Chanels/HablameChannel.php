<?php

namespace App\Notifications\Channels;

use App\Services\HablameSmsService;
use Illuminate\Notifications\Notification;

class HablameChannel
{
    protected HablameSmsService $sms;

    public function __construct(HablameSmsService $sms)
    {
        $this->sms = $sms;
    }

    public function send($notifiable, Notification $notification): void
    {
        if (! method_exists($notification, 'toHablame')) {
            return;
        }

        $message = $notification->toHablame($notifiable);

        if (! $message) {
            return;
        }

        $this->sms->send($message['to'], $message['text'], $message['reference'] ?? null);
    }
}
