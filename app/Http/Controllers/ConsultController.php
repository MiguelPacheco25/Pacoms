<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Client;
use App\Models\Ticket;
use App\Models\ItemTicket;
use Auth;
use Artisan;
use PDF;

class ConsultController extends Controller
{

    public function index()
    {
       $tickets = Ticket::orderBy('created_at', 'DESC')->get();
       return view('dashboard', compact(['tickets']));

       /*$clients = Client::with('ticket')->where('SocialRasonRuc', 'LIKE', "%man%")->get();
        foreach( $clients as  $client ){
            $tickets = $client->ticket;
        }
        return view('dashboard', compact(['tickets']));*/
    }

    public function create()
    {
       $ticket = Ticket::first();
       return view('consult', compact(['ticket']));
    }

    public function store(Request $request)
    {
        $usuario = Auth::user()->name;

        $clientStored = Client::where('NumberRuc', $request->NumberRuc)->first();

        $client = Client::updateOrCreate(
            ['NumberRuc' =>  $request->NumberRuc], [
            'NumberRuc' =>  $request->NumberRuc,
            'SocialRasonRuc' => $request->SocialRasonRuc,
            'NamesClient' => $request->NamesClient != null ? $request->NamesClient : isset($clientStored->NamesClient),
        ]);

        $ticket = Ticket::create([
            'TicketTypeTicket' =>  $request->TicketTypeTicket,
            'MoneyTypeTicket' =>  $request->MoneyTypeTicket,
            'PayTypeTicket' =>  $request->PayTypeTicket,
            'ServiceTypeTicket' =>  $request->ServiceTypeTicket,
            'SubTotalTicket' =>  $request->SubTotalTicket,
            'IGVTicket' =>  $request->IGVTicket,
            'TotalTicket' =>  $request->TotalTicket,
            'client_id' =>  $client->id
        ]);

        for ($i = 1; $i <= $request->itemAmountTicket; $i++) { 
            $amountItem = "AmountItem".$i;
            $descriptionItem = "DescriptionItem".$i;
            $priceItem = "PriceItem".$i;

            $itemTicket = ItemTicket::create([
                'AmountItem' => $request->$amountItem,
                'DescriptionItem' => $request->$descriptionItem,
                'PriceItem' => $request->$priceItem,
                'ticket_id' => $ticket->id
            ]);
        }

        
        return response()->json(['rpt' => "Comprobante registrado correctamente."]);
        //return view('consult');
    }

    public function show($ruc)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Ticket::find($id)->delete();
        $tickets = Ticket::orderBy('created_at', 'DESC')->get();
        //return view('dashboard', compact(['tickets']));
        return redirect()->back()->with('tickets', $tickets);
    }

    public function downloadPdf()
    {
        
        $ticket = Ticket::first();
        $nombrePDF = 'ComprobanteN°00-'.$ticket->id.'.pdf';
        //return view('consult', compact(['ticket']));

        //$pdf = PDF::loadView('consult', compact(['ticket']))->setPaper('a4', 'landscape');
        $pdf = PDF::loadView('consult', compact(['ticket']))->setPaper('a4');

        //return $pdf->download($nombrePDF);
        return $pdf->stream();
    }

    public function search(Request $request){
        $tickets = array();
        $itemTicket = array();
        $cont = 0;
        if ($request->ajax()){
            $clients = Client::with('ticket')->where('SocialRasonRuc', 'LIKE', "%$request->BSocialRazon%")->orderBy('created_at', 'DESC')->get();

            foreach( $clients as  $index => $client ){
                $tickets = new Ticket();
                $tickets[$index] = $client->ticket;
                
                foreach($client->ticket as $ticket){
                    $itemTicket = new ItemTicket();
                    $itemTicket[$cont] = $ticket->itemTicket;
                    $cont++;
                }
            }

            return response()->json(['clients' => $clients, 'itemTickets' => $itemTicket]);
        }
    }
}
