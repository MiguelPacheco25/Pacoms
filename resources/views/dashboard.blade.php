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

                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th width="5%"> RUC:  </th>
                                <td width="15%"> {{ $ticket->client->NumberRuc }} </td>
                                <th width="10%"> Razón Social:  </th>
                                <td> {{ $ticket->client->SocialRasonRuc }} </td>
                                <th width="5%"> Fecha:  </th>
                                <td width="20%"> {{ $ticket->created_at }} </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th width="10%"> Comprobante:  </th>
                                <td class="text-left"> {{ $ticket->TicketTypeTicket }} </td>
                                <th width="7%"> Moneda:  </th>
                                <td class="text-left"> {{ $ticket->MoneyTypeTicket }} </td>
                                <th width="12%"> Forma de pago:  </th>
                                <td class="text-left"> {{ $ticket->PayTypeTicket }} </td>
                                <th width="8%"> Producto:  </th>
                                <td class="text-left"> {{ $ticket->ServiceTypeTicket }} </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table" style="table-layout:fixed">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th width="10%">Cantidad</th>
                                <th width="65%" height="100%" class="text-center">Descripción</th>
                                <th width="20%">Precio Unitario</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ticket->itemTicket as $index => $itemTickets)
                            <tr>
                                <th> {{ $index + 1 }} </th>
                                <td> {{ $itemTickets->AmountItem }} </td>
                                <td class="text-center align-top" height="auto" style="Word-wrap: break-Word"> {{ $itemTickets->DescriptionItem }} </td>
                                <td> S/. {{ $itemTickets->PriceItem }}.00 </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr> 
                                <td></td>
                                <td></td>
                                <td class="text-right"><b>SubTotal: </b></td>
                                <td> {{ $ticket->SubTotalTicket }} </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="text-right"><b>IGV: </b></td>
                                <td> {{ $ticket->IGVTicket }} </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="text-right"><b>Total: </b></td>
                                <td> {{ $ticket->TotalTicket }} </td>
                            </tr>
                        </tfoot>

                    </table> 
                    <div class="d-flex justify-content-end">
                        <form id="frm_sendEmail{{ $ticket->id }}" method="POST" class="row g-3">
                            @csrf
                            <div class="col-auto">
                                <label for="staticEmail2" class="visually-hidden">Email</label>
                                <input type="email" class="form-control" id="EmailSendTicket" name="EmailSendTicket" value="jpacheco@unitru.edu.pe" placeholder="@gmail.com">
                                <input type="hidden" class="form-control" id="IdTicket" name="IdTicket" value="{{ $ticket->id }}">
                            </div>
                        </form>
                        <div class="col-auto">
                                <button class="btn btn-outline-primary mx-2" onclick="sendEmail({{ $ticket->id }})">Enviar</button>
                            </div>
                        <div class="col-auto">
                            <a class="btn btn-outline-warning mx-2">PDF</a> 
                        </div>
                        <div class="col-auto">
                            <a class="btn btn-outline-danger mx-2" href="{{ url('/delete/' . $ticket->id ) }}">Eliminar</a> 
                        </div>
                    </div>                      
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
