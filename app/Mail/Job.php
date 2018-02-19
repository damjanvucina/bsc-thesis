<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Job extends Mailable
{
    use Queueable, SerializesModels;
    public $sender;
    public $receiver;
    public $job;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $sender,  $receiver,  $job)
    {
        $this->sender=User::where('id', '=', $sender)->first();

        $this->receiver=User::where('id', '=', $receiver)->first();

        $this->job=\App\Job::where('id', '=', $job)->first();

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.job');
    }
}
