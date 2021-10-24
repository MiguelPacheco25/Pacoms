<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Client;
use App\Models\Ticket;
use App\Models\ItemTicket;
use Auth;
use Artisan;

class ConsultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tickets = Ticket::orderBy('created_at', 'DESC')->get();
       return view('dashboard', compact(['tickets']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
       $ticket = Ticket::first();

       return view('consult', compact(['ticket']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ruc)
    {

        $url = file_get_contents('https://dniruc.apisperu.com/api/v1/ruc/'.$ruc.'?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Im1hcmxvbi5zYW5jaGV6LmNoYXZlekBnbWFpbC5jb20ifQ.PYMu7nXFp8anSN7cw340zlUPCw0asP6pti7hST6lawQ');

         
        //print_r($url);
        return view('consult');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ticket::find($id)->delete();
        $tickets = Ticket::orderBy('created_at', 'DESC')->get();
        //return view('dashboard', compact(['tickets']));
        return redirect()->back()->with('tickets', $tickets);
    }
}
