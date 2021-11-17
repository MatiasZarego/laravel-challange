<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ProspectsMail;

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
        $a = $req->email;
        $a .= " estaremos en contacto!";
        return redirect()->back()->withSuccess($a) ;
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
