<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Ticket;

class MailTicket extends Mailable
{
    use Queueable, SerializesModels;

    public $ticket;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Ticket $ticket)
    {
        $this->ticket = $ticket;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        //return $this->from('miguelpacheco.1622@gmail.com', 'Example')
          //      ->view('dashboard');

        //return $this->view('consult', compact($this->ticket))->subject('00'.$this->ticket->id);

        return $this->view('consult')
                    ->subject($this->ticket->TicketTypeTicket.' N° 00-0'.$this->ticket->id)
                    ->with([
                        'ticket' => $this->ticket
                    ]);
                    //->attach('img/logo.png')
        
    }
}
