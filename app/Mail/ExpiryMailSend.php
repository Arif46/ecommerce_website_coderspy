<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ExpiryMailSend extends Mailable
{
    use Queueable, SerializesModels;

    public $logo;
    public $siteEmail;
    public $phone;
    public $siteName;
    public $file;
    public function __construct($logo,$siteEmail,$phone,$siteName,$file)
    {
        $this->logo = $logo;
        $this->siteEmail = $siteEmail;
        $this->phone = $phone;
        $this->siteName = $siteName;
        $this->file = $file;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('expire_mail');
    }
}
