<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
   

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->view('mail',['msg'=>$request->message])->to($request ->emailto)
        ->subject('meghana')
        ->attach($this->data['attachment']->getRealPath(),
        [
            'as' => $this->data['attachment']->getClientOriginalName(),
            'mime' => $this->data['attachment']->getClientMimeType(),
        ]);
    }
}