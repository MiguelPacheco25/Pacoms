<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
	<style type="text/css">
		body{
			font-family: 'Montserrat', sans-serif;
			font-size: 13px;
		}
		th, td{
			
		}
		table{
			width: 100%;
			max-width: 100%;
		}
		.field_no_wrap{
			height: auto; 
			Word-wrap: break-Word;
			width: 60%;
			text-align: center;
		}
		.field_no_wrap_table{
			table-layout:fixed;
		}
		.text-center{
			text-align: center;
		}
		.text-right{
			text-align: right;
		}
		.text-left{
			text-align: left;
		}
		.table_border{
			border: 1px solid black;
  			border-collapse: collapse;
		}
		.background_img{
			background-image: url(https://i.ibb.co/RB5mNrd/logo2-BN2.png);
			background-repeat: no-repeat;
			background-position: center;
			background-size: 400px 250px;
		}
	</style>
</head>
<body>
	
	<table>
        <tbody>
        	
        	<tr>
        		<td width="50px" class="text-right"> <small> RUC </small> </td>
                <td> <small> : 20606758562 </small> </td>
                <td rowspan="6" class="text-center" width="300px"><img src="https://i.ibb.co/qnFw0hg/logo.png"  alt="logo" border="0" width="280px"></td>
        	</tr>
        	<tr>
        		<td class="text-right"> <small> TALLER </small> </td>
                <td> <small> : Prolongación César Vallejo 2151 La Rinconada </small> </td>
        	</tr>
        	<tr>
        		<td class="text-right"> <small> Domicilio </small> </td>
                <td> <small> : Av Sánchez Carrión 1902 El Porvenir </small> </td>
        	</tr>
        	<tr>
        		<td class="text-right"> <small> Celular </small> </td>
                <td> <small> : +51 930 614 755 </small> </td>
        	</tr>
        	<tr>
        		<td></td>
        		<td></td>
        	</tr>
        	<tr>
        		<td></td>
        		<td></td>
        	</tr>
        	<tr>
        		<td></td>
        		<td></td>
        		<td class="text-center" style="border: black solid 1px;"> <b>{{ $ticket->TicketTypeTicket }}:&nbsp; N° 00 - {{ $ticket->id }} </b> </td>
        	</tr>
        </tbody>
    </table>
	<br>
	<hr>
<div class="background_img">
	<div class="text-center">
    	<h4>DATOS DEL CLIENTE</h4>
    </div>
    <table>
        <tbody>
            <tr>
                <th width="" class="text-right"> RUC  </th>
                <td class="text-left"> <b>: </b> {{ $ticket->client->NumberRuc }} </td>
                <th width="" class="text-right"> Fecha  </th>
                <td class="text-left"> <b>: </b> {{ $ticket->created_at }} </td>
            </tr>
            <tr>
                <th width="" class="text-right"> Razón Social  </th>
                <td class="text-left" colspan="3"> <b>: </b> {{ $ticket->client->SocialRasonRuc }} </td>
            </tr>
            <tr>
            	<th width="" class="text-right"> Comprobante  </th>
                <td class="text-left"> <b>: </b> {{ $ticket->TicketTypeTicket }} </td>
                <th width="" class="text-right"> Moneda  </th>
                <td class="text-left"> <b>: </b> {{ $ticket->MoneyTypeTicket }} </td>
            </tr>
            <tr>
            	<th width="" class="text-right"> Forma de pago  </th>
                <td class="text-left"> <b>: </b> {{ $ticket->PayTypeTicket }} </td>
                <th width="" class="text-right"> Producto  </th>
                <td class="text-left"> <b>: </b> {{ $ticket->ServiceTypeTicket }} </td>
            </tr>
        </tbody>
    </table>
	<br>
	<br>
	<table class="field_no_wrap_table table_border">
		<thead>
			<tr class="table_border">
				<th class="table_border">Unid.</th>
				<th class="table_border">Descripción</th>
				<th class="table_border">Precio</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($ticket->itemTicket as $index => $itemTickets)
			<tr class="table_border">
				<td class="text-center table_border"> {{ $itemTickets->AmountItem }} </td>
				<td class="field_no_wrap table_border"> {{ $itemTickets->DescriptionItem }} </td>
				<td class="text-center table_border"> S/. {{ $itemTickets->PriceItem }}.00 </td>
			</tr>
			@endforeach
		</tbody>
		<tfoot>
			<tr> 
				<td></td>
				<td class="text-right"><b>SubTotal: </b></td>
				<td class="text-center table_border"> {{ $ticket->SubTotalTicket }} </td>
			</tr>
			<tr>
				<td></td>
				<td class="text-right"><b>IGV: </b></td>
				<td class="text-center table_border"> {{ $ticket->IGVTicket }} </td>
			</tr>
			<tr>
				<td></td>
				<td class="text-right"><b>Total: </b></td>
				<td class="text-center table_border"> {{ $ticket->TotalTicket }} </td>
			</tr>
		</tfoot>
	</table> 
</div>
	<br>
	<hr>
	<table>
        <tbody>
            <tr>
                <th width="" class="text-right"> BCP SOLES (S/)  </th>
                <td class="text-left"> <b>: </b> 570 - 8969973060 </td>
            </tr>
            <tr>
                <th width="" class="text-right"> CCI BCP SOLES  </th>
                <td class="text-left"> <b>: </b> 022 - 57000896997306005 </td>
            </tr>
            <tr>
                <th width="" class="text-right"> DETRACCIÓN B. NACIÓN  </th>
                <td class="text-left"> <b>: </b> 00 - 741 - 665972 </td>
            </tr>
            
        </tbody>
    </table>

	<br><br>
	<footer>
		<p><small>{{ $ticket->TicketTypeTicket }} generada por Factoría Pacoms.</small></p>
	</footer>
</body>
</html>