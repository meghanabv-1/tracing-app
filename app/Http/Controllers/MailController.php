<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class MailController extends Controller
{
    public function email()
    {
          return view('email');
    }  
    public function send(Request $request) {
    $this->validate($request,[
        'emailto'=>'required|email',
        'subject'=> 'min:3',
        'message'=> 'min:10'
        ]);
        $data= array(
            'emailto'=>$request->email,
            'subject'=> $request->subject,
            'message'=> $request->message,
        );
       
        Mail::send('mail', $data, function($message) use($data){
            $message->from($data['emailto']);
            $message->to('valiyuddin@metrosolutions.in');
            $message->subject($data['subject']);
        });
        session::flash('sucess', 'your message was sent!');
        return redirect()->url('/');
    }

   
}
