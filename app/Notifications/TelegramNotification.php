<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

use TelegramNotifications\TelegramChannel;
use TelegramNotifications\Messages\TelegramMessage;

class TelegramNotification extends Notification
{
    use Queueable;

    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    public function toTelegram()
    {
        return (new TelegramMessage())
            ->text($this->text);
    }
}
