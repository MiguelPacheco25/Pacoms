<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Mail\MailTicket;
use Artisan;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request){
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('config:cache');

        $data["email"] = "Miguel Pacheco";
        $data["title"] = "Factoría Pacoms";
        //$data["body"] = "This is Demo";

        //$clients = Client::all();
        $email = $request->EmailSendTicket;

        $ticket = Ticket::find($request->IdTicket);
        
  
        /*Mail::send('consult', $data, function($message)use($data, $request) {

            $message->to($request->EmailSendTicket, $data["email"])
                    ->subject($data["title"]);
        });*/

        Mail::to($email)->send(new MailTicket($ticket));
  
    }
}
