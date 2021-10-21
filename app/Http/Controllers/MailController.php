<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;
use Mail;

class MailController extends Controller
{
    public function send(){
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('config:cache');

        $data["email"] = "Miguel Pacheco";
        $data["title"] = "Factoría Pacoms";
        //$data["body"] = "This is Demo";
  
  
        Mail::send('consult', $data, function($message)use($data) {
            $message->to('miguelpacheco.1622@gmail.com', $data["email"])
                    ->subject($data["title"]);
        });
  
    }
}
