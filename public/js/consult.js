$(document).ready(calculateTotal);
$(document).ready(function(){
  
});
var item = 1;

function consultRuc(){
	let ruc = $('#NumberRuc')[0].value;

	if(ruc.length == 11)
		$.getJSON('https://dniruc.apisperu.com/api/v1/ruc/'+ruc+'?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Im1hcmxvbi5zYW5jaGV6LmNoYXZlekBnbWFpbC5jb20ifQ.PYMu7nXFp8anSN7cw340zlUPCw0asP6pti7hST6lawQ', function(data) {
		    $('#SocialRasonRuc')[0].value = data.razonSocial;   
		    $('#PhoneRuc')[0].value = data.telefonos;   
		    $('#StatusRuc')[0].value = data.estado;   
		    $('#AddressRuc')[0].value = data.direccion;   
		    $('#DepartamentRuc')[0].value = data.departamento;   
		    $('#ProvinceRuc')[0].value = data.provincia; 
		    $('#DistrictRuc')[0].value = data.distrito;   
	});
}

function addItem(){
	item += 1;
	
	let addtr = `<tr id="tr${item}">
                  <td><input type="number" class="form-control px-1" id="AmountItem${item}" name="AmountItem${item}" autocomplete="off" onkeyup="calculateTotal()" required></td>
                  <td><input type="text" class="form-control" id="DescriptionItem${item}" name="DescriptionItem${item}" autocomplete="off" required></td>
                  <td><input type="number" class="form-control px-1" id="PriceItem${item}" name="PriceItem${item}" onkeyup="calculateTotal()" required></td>
                  <td><button type="button" onclick="removeItem('tr${item}')">X</button></td>
	             </tr>`;
	
	$('#tbodyItem').append(addtr);
}

function removeItem(event){
  let a = "#"+event;
  $(a).remove();
  console.log(a)
  item--;
}

function calculateTotal(){

}

function resetForm(formName){
  
  document.getElementById(formName).reset();
}


$('#btnCalcultateTotal').on("click", function(){
	let subTotal = 0;
	let igv;
	let total;
	let tempPrice = 0;
  let tempAmount = 0;
	for (let i = 1; i <= item; i++) {
    tempPrice = $('#PriceItem'+i)[0].value != "" ? parseInt($('#PriceItem'+i)[0].value) : 0;
    tempAmount = $('#AmountItem'+i)[0].value != "" ? parseInt($('#AmountItem'+i)[0].value) : 0;
	   subTotal = subTotal + (parseInt(tempPrice) * parseInt(tempAmount));
	}
	
	igv = subTotal*0.18;
	total = (subTotal*1.18);

	$('#SubTotalTicket')[0].value = "S/. " + subTotal.toFixed(2);
	$('#IGVTicket')[0].value = "S/. " + igv.toFixed(2);
	$('#TotalTicket')[0].value = "S/. " + total.toFixed(2);
	$('#itemAmountTicket')[0].value = item;
});

$('#frm_searchSocialRazon').on("submit", function(){
  event.preventDefault();
  let data_frm = $('#frm_searchSocialRazon').serialize();
  console.log(data_frm)
  $.ajax({
      type: "POST",
      url: "/acciones/search",
      data: data_frm,
      success: function(response){
        $('.toast').toast('show');
        let clients = response.clients;
        let tickets_html, itemTicket_html, response_html, tickets_html2;
        let ticket;
        for(let i = 0; i < clients.length; i++){
          ticket = clients[i].ticket;
          for(let y = 0; y < ticket.length; y++){

            tickets_html = `<div class="py-3">
                              <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                  <div class="p-6 bg-white border-b border-gray-200">
                                    <div class="col-12 mt-2 mb-3 d-flex justify-content-end"> 
                                      <b class="text-uppercase"> ${ticket[y].TicketTypeTicket}:&nbsp; </b> N° 00 - ${ticket[y].id}  
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-md-4 pb-1">
                                        <b>RUC:</b> ${clients[i].NumberRuc}
                                      </div>
                                      <div class="col-md-4 pb-1">
                                        <b>Razón Social:</b> <span class="badge bg-primary"> ${clients[i].SocialRasonRuc}</span> 
                                      </div>
                                      <div class="col-md-4 pb-1">
                                        <b>Fecha:</b> ${clients[i].created_at}
                                      </div>
                                      <div class="col-md-4 pb-1">
                                        <b>Comprobante:</b> ${ticket[y].TicketTypeTicket}
                                      </div>
                                      <div class="col-md-4 pb-1">
                                        <b>Moneda:</b> ${ticket[y].MoneyTypeTicket}
                                      </div>
                                      <div class="col-md-4 pb-1">
                                        <b>Producto:</b> ${ticket[y].ServiceTypeTicket}
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
                                    
                                                          
                                  `;

            tickets_html2 = `         </tbody>
                                      <tfoot>
                                        <tr> 
                                          <td></td>
                                          <td class="text-right"><b>SubTotal: </b></td>
                                          <td><small> ${ticket[y].SubTotalTicket} </small></td>
                                        </tr>
                                        <tr>
                                          <td></td>
                                          <td class="text-right"><b>IGV: </b></td>
                                          <td> <small> ${ticket[y].IGVTicket} </small> </td>
                                        </tr>
                                        <tr>
                                          <td></td>
                                          <td class="text-right"><b>Total: </b></td>
                                          <td> <small> ${ticket[y].TotalTicket} </small></td>
                                        </tr>
                                      </tfoot>
                                    </table>  
                                  </div>
                                </div>
                              </div>
                            </div>`;
            let itemTickets = ticket[y].item_ticket;
            for(let p = 0; p < itemTickets.length; p++){
              itemTicket_html = ` <tr>
                                    <td> <small> ${itemTickets[p].AmountItem} </small> </td>
                                    <td class="text-center align-top" height="auto" style="Word-wrap: break-Word"> 
                                      <small> ${itemTickets[p].DescriptionItem} </small>
                                    </td>
                                    <td> <small>S/. ${itemTickets[p].PriceItem}.00</small> </td>
                                  </tr>`;
              }
              response_html = response_html + tickets_html + itemTicket_html + tickets_html2;
          }
          
        }
      $('#showTickets').html(response_html);
      }
  });
});


$('#frm_registerConsult').on("submit", function(){
  event.preventDefault();
  calculateTotal();
  let data_frm = $('#frm_registerConsult').serialize();
  console.log(data_frm);
  $.ajax({
      type: "POST",
      url: "/acciones/storeConsult",
      data: data_frm,
      success: function(e){
        $('.toast').toast('show');
        resetForm("frm_registerConsult");
        console.log(e.rpt);
      }
  });
});


/*$('#frm_sendEmail').on("submit", function(){
  event.preventDefault();
  let data_frm = $('#frm_sendEmail').serialize();
  console.log(data_frm);
  $.ajax({
      type: "POST",
      url: "/sendEmail",
      data: data_frm,
      success: function(e){
        /*if (e.rpt == 'ok'){
          alert("Ok.");
        }
        else 
          alert("Error al modificar la Unidad.");
        console.log(e.rpt);
      }
  });
});*/

function sendEmail(ticket_id){
  event.preventDefault();
  let data_frm = $('#frm_sendEmail'+ticket_id).serialize();
  console.log(data_frm);
  $.ajax({
      type: "POST",
      url: "/sendEmail",
      data: data_frm,
      success: function(e){
        /*if (e.rpt == 'ok'){
          alert("Ok.");
        }
        else 
          alert("Error al modificar la Unidad.");*/
        console.log(e.rpt);
      }
  });
};





// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
	
