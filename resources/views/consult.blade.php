<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!--<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,100&display=swap" rel="stylesheet"> -->
	<style type="text/css">
		.text-right{
			text-align: right;
		}
		.text-left{
			text-align: left;
		}
		.text-center{
			text-align: center;
		}
		.flex-column{
			display: flex;
			flex-direction: column;
		}
		.bg-ticket-info{
			background-color: #EEECEB;
		}
		.mt-4{
			margin-top: 10px;
		}

		.fs-4{
			font-size: 11px;
		}

		body{
			font-family: 'Poppins', sans-serif;
			background-color: white;		
		}
	</style>
</head>
<body>
	<div class="container mt-4">
		<div class="row">
			<div class="col-4">
				
				<img src="https://i.ibb.co/qnFw0hg/logo.png" alt="logo" border="0" width="80%">
			</div>
			<div class="col-8 flex-column">
				<!-- <label> <b> RUC:</b> 20606758562</label><br><br>
				<label> <b> TALLER:</b> Prolongación César Vallejo 2151 La Rinconada</label><br>
				<label> <b> Domicilio:</b> Av Sánchez Carrión 1902 El Porvenir</label><br>
				<label> <b> Celular:</b> +51 930 614 755</label><br> -->
				<table class="table table-sm table-borderless">
	                <tbody>
	                	<tr>
	                		<th width="10%"> RUC:  </th>
	                        <td class="text-left"> 20606758562 </td>
	                	</tr>
	                	<tr>
	                		<th width="10%"> TALLER:  </th>
	                        <td class="text-left"> Prolongación César Vallejo 2151 La Rinconada </td>
	                	</tr>
	                	<tr>
	                		<th width="10%"> Domicilio:  </th>
	                        <td class="text-left"> Av Sánchez Carrión 1902 El Porvenir </td>
	                	</tr>
	                	<tr>
	                		<th width="10%"> Celular:  </th>
	                        <td class="text-left"> +51 930 614 755 </td>
	                	</tr>
	                </tbody>
	            </table>
			</div>
		</div>

		<div class="row my-3 pb-3 bg-ticket-info">
			

			<table class="table table-sm table-borderless">
				<thead>
					<th colspan="6" class="text-center"> <h5>DATOS DEL CLIENTE</h5> </th>
				</thead>
                <tbody>
                    <tr>
                        <th width=""> RUC  </th>
                        <td class="text-left"> <b>: </b> {{ $ticket->client->NumberRuc }} </td>
                    </tr>
                    <tr>
                        <th width=""> Fecha  </th>
                        <td class="text-left"> <b>: </b> {{ $ticket->created_at }} </td>
                    </tr>
                    <tr>
                        <th width=""> Razón Social  </th>
                        <td class="text-left"> <b>: </b> {{ $ticket->client->SocialRasonRuc }} </td>
                    </tr>
                    <tr>
                    	<th width=""> Comprobante  </th>
                        <td class="text-left"> <b>: </b> {{ $ticket->TicketTypeTicket }} </td>
                    </tr>
                    <tr>
                        <th width=""> Moneda  </th>
                        <td class="text-left"> <b>: </b> {{ $ticket->MoneyTypeTicket }} </td>
                    </tr>
                    <tr>
                    	<th width=""> Forma de pago  </th>
                        <td class="text-left"> <b>: </b> {{ $ticket->PayTypeTicket }} </td>
                    </tr>
                    <tr>
                        <th width=""> Producto  </th>
                        <td class="text-left"> <b>: </b> {{ $ticket->ServiceTypeTicket }} </td>
                    </tr>
                </tbody>
            </table>
			
		</div>

		<div class="row">
			<table class="table" style="table-layout:fixed;">
				<thead>
					<tr>
						<th width="16%" class="text-center">Unid.</th>
						<th  height="" class="text-center">Descripción</th>
						<th width="30%">Precio</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($ticket->itemTicket as $index => $itemTickets)
					<tr>
						<td class="text-center"> {{ $itemTickets->AmountItem }} </td>
						<td class="text-center align-center" height="auto" style="Word-wrap: break-Word"> {{ $itemTickets->DescriptionItem }} </td>
						<td > S/. {{ $itemTickets->PriceItem }}.00 </td>
					</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr> 
						<td></td>
						<td class="text-right"><b>SubTotal: </b></td>
						<td> {{ $ticket->SubTotalTicket }} </td>
					</tr>
					<tr>
						<td></td>
						<td class="text-right"><b>IGV: </b></td>
						<td> {{ $ticket->IGVTicket }} </td>
					</tr>
					<tr>
						<td></td>
						<td class="text-right"><b>Total: </b></td>
						<td> {{ $ticket->TotalTicket }} </td>
					</tr>
				</tfoot>
			</table> 
		</div>
		<br><br>


		<div class="border border-dark py-3">

			<table class="table table-sm table-borderless">
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

			
		</div>
	</div>
</body>
</html>