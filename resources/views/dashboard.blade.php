<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de comprobantes') }} 
        </h2>
    </x-slot>
    @foreach ($tickets as $ticket)
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="col-12 mt-2 mb-3 d-flex justify-content-end"> 
                        <b class="text-uppercase"> {{ $ticket->TicketTypeTicket }}:&nbsp; </b> N° 00 - {{ $ticket->id }}  
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4 pb-1">
                            <b>RUC:</b> {{ $ticket->client->NumberRuc }}
                        </div>
                        <div class="col-md-4 pb-1">
                            <b>Razón Social:</b> {{ $ticket->client->SocialRasonRuc }}
                        </div>
                        <div class="col-md-4 pb-1">
                            <b>Fecha:</b> {{ $ticket->created_at }}
                        </div>
                        <div class="col-md-4 pb-1">
                            <b>Comprobante:</b> {{ $ticket->TicketTypeTicket }}
                        </div>
                        <div class="col-md-4 pb-1">
                            <b>Moneda:</b> {{ $ticket->MoneyTypeTicket }}
                        </div>
                        <div class="col-md-4 pb-1">
                            <b>Producto:</b> {{ $ticket->ServiceTypeTicket }}
                        </div>
                    </div>
                    

                    <table class="table my-3" style="table-layout:fixed">
                        <thead>
                            <tr>
                                <th width="5%"><small>Cant</small></th>
                                <th width="65%" height="100%" class="text-center"><small>Descripción</small></th>
                                <th width="25%"><small>P. Unitario</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ticket->itemTicket as $index => $itemTickets)
                            <tr>
                                <td> <small>{{ $itemTickets->AmountItem }}</small> </td>
                                <td class="text-center align-top" height="auto" style="Word-wrap: break-Word"> 
                                    <small>{{  $itemTickets->DescriptionItem }}</small>
                                </td>
                                <td> <small>S/. {{ $itemTickets->PriceItem }}.00</small> </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr> 
                                <td></td>
                                <td class="text-right"><b>SubTotal: </b></td>
                                <td><small>{{ $ticket->SubTotalTicket }}</small></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-right"><b>IGV: </b></td>
                                <td> <small>{{ $ticket->IGVTicket }}</small> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-right"><b>Total: </b></td>
                                <td> <small>{{ $ticket->TotalTicket }}</small></td>
                            </tr>
                        </tfoot>

                    </table> 
                    <div class="d-flex justify-content-end">
                        <form id="frm_sendEmail{{ $ticket->id }}" method="POST" class="row g-3">
                            @csrf
                            <div class="col-auto">
                                <label for="staticEmail2" class="visually-hidden">Email</label>
                                <input type="email" class="form-control form-control-sm" id="EmailSendTicket" name="EmailSendTicket" value="jpacheco@unitru.edu.pe" placeholder="@gmail.com">
                                <input type="hidden" class="form-control" id="IdTicket" name="IdTicket" value="{{ $ticket->id }}">
                            </div>
                        </form>
                        <div class="col-auto">
                                <button class="btn btn-outline-primary btn-sm mx-1" onclick="sendEmail({{ $ticket->id }})">Enviar</button>
                            </div>
                        <div class="col-auto">
                            <a class="btn btn-outline-warning btn-sm mx-1" href="{{ url('/test') }}">PDF</a> 
                        </div>
                        <div class="col-auto">
                            <a class="btn btn-outline-danger btn-sm mx-1" href="{{ url('/delete/' . $ticket->id ) }}">Eliminar</a> 
                        </div>
                    </div>                      
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
