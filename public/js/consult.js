
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
	
	let addtr = `<tr>
                  <th scope="row">${item}</th>
                  <td><input type="number" class="form-control" id="AmountItem${item}" name="AmountItem${item}" autocomplete="off" required></td>
                  <td><input type="text" class="form-control" id="DescriptionItem${item}" name="DescriptionItem${item}" autocomplete="off" required></td>
                  <td><div class="input-group mb-3">
                      <span class="input-group-text">S/. </span>
                      <input type="text" class="form-control" id="PriceItem${item}" name="PriceItem${item}" required>
                    </div>
                    </td>
	             </tr>`;
	
	$('#tbodyItem').append(addtr);
}

function calculateTotal(){
	let subTotal = 0;
	let igv;
	let total;
	
	for (let i = 1; i <= item; i++) {
	   subTotal += parseInt($('#PriceItem'+i)[0].value);
	}
	
	igv = subTotal*0.18;
	total = (subTotal*1.18);

	$('#SubTotalTicket')[0].value = "S/. " + subTotal.toFixed(2);
	$('#IGVTicket')[0].value = "S/. " + igv.toFixed(2);
	$('#TotalTicket')[0].value = "S/. " + total.toFixed(2);
	$('#itemAmountTicket')[0].value = item;
}


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
        /*if (e.rpt == 'ok'){
          alert("Ok.");
        }
        else 
          alert("Error al modificar la Unidad.");*/
        console.log(e.rpt);
      }
  });
});





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
	
