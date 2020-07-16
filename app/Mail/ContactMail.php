<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $email;
    public $phoneNumber;
    public $inquiry;
    public $message;
    public $orderId;
    public $siteEmail;
    public $phone;
    public $siteName;
    public $logo;
    public function __construct($name, $email, $phoneNumber, $inquiry, $subject, $message, $orderId, $siteEmail, $phone, $siteName,$logo)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->inquiry = $inquiry;
        $this->message = $message;
        $this->orderId = $orderId;
        $this->siteEmail = $siteEmail;
        $this->phone = $phone;
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
        return $this->view('contact_mail_templete');
    }
}