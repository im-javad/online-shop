<?php

namespace App\Jobs;

use App\Models\User;
use App\Support\Notification\Notification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class sendEmail implements ShouldQueue{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private User $user , private Mailable $mailable){
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Notification $notification){
        return $notification->sendEmail($this->user , $this->mailable);
    }
}


