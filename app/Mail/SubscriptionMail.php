<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubscriptionMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $email;
    public $shipping;
    public $total;
    public $date;
    public $logo;
    public $siteEmail;
    public $phone;
    public $siteName;
    public $id;
    public function __construct($name,$email,$shipping,$total,$date,$logo,$siteEmail,$phone,$siteName,$id)
    {
        $this->name = $name;
        $this->email = $email;
        $this->shipping = $shipping;
        $this->total = $total;
        $this->date = $date;
        $this->logo = $logo;
        $this->siteEmail = $siteEmail;
        $this->phone = $phone;
        $this->siteName = $siteName;
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail_templete');
    }
}
