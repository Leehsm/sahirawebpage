<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MembershipMail extends Mailable
{
    use Queueable, SerializesModels;

    public $membership_reg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($membership_reg)
    {
        $this->membership_reg = $membership_reg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $membership_reg = $this->membership_reg;
        return $this->from('noreply@outfitbysahira.com')->view('mail.membership_reg',compact('membership_reg'))->subject('Thank you for register as a Sahira member');
    }
}
