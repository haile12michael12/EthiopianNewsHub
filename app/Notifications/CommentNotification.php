<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class CommentNotification extends Notification
{
    public function via(\)
    {
        return ['mail'];
    }

    public function toMail(\)
    {
        return (new MailMessage)
                    ->line('Notification message here.');
    }
}
