<?php

namespace App\Listeners;

use App\Events\HasExceptionEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\HasExceptionNotification;
use Notification;
use Exception;

class HasExceptionListener
{
    public function handle(HasExceptionEvent $event)
    {
        $notify = new HasExceptionNotification($event);
        $slackWebHookUrl = 'https://hooks.slack.com/services/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'; // paste your webhook slack url here
        Notification::route('slack', $slackWebHookUrl)->notify($notify);
    }
}