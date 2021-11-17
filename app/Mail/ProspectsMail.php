<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ProspectsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "testing testerino";
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function index(Request $req)
    {
        $email = new ProspectsMail;

        Mail::to($req->email)->send($email);
        return "mensaje enviado";
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.prospects-mailable');
    }
}
