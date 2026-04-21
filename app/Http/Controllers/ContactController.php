<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;

class ContactController extends Controller
{
    public function sendMail(Request $request){
        $data=[
            'nom' =>$request->nom,
            'email' =>$request->email,
            'sujet' =>$request->sujet,
            'messageText' =>$request->message
        ];
        Mail::send('emails/contacte',$data, function($message) use ($data){
            $message->to('partnersbiyog@gmail.com')
                    ->subject($data['sujet']);
            $message->from('partnersbiyog@gmail.com', 'biyog partners');
            $message->replyTo($data['email'],$data['nom']);
        });
        return redirect()->back()->with('success','message envoye avec succes');
    }
}

?>