<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ApplicantMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $position;
    public $name;
    public $email;
    public $area_of_interest;
    public $cover_letter;
    public $resume;
    public $siteName;
    public $logo;
    public function __construct($position,$name, $email, $area_of_interest, $cover_letter,$resume, $siteName,$logo)
    {
        $this->position = $position;
        $this->name = $name;
        $this->email = $email;
        $this->area_of_interest = $area_of_interest;
        $this->cover_letter = $cover_letter;
        $this->resume = $resume;
        $this->siteName = $siteName;
        $this->logo = $logo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('applicant_form');
    }
}