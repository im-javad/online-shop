<?php

namespace App\Listeners;

use App\Jobs\sendEmail;
use App\Mail\SendOrderDetails;
use App\Support\Notification\Notification;

class SendOrderDetailsEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(){
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event){
        return sendEmail::dispatch($event->order->user , new SendOrderDetails($event->order));
    }
}


