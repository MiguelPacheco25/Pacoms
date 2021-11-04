
<div class="container">
  <form class="row g-3 needs-validation" id="frm_registerConsult" method='POST'>
    @csrf
    <div class="col-md-3 has-validation">
      <label for="" class="form-label">RUC <span class="required">*</span></label>
      <input type="number" class="form-control" id="NumberRuc" name="NumberRuc" onkeyup="consultRuc()" maxlength="11" required>
      <div class="invalid-feedback">
        *Ingresa un Ruc.
      </div>
    </div>
    <div class="col-md-9"></div>
    <div class="col-md-6">
      <label for="SocialRasonRuc" class="form-label">Razon Social</label>
      <input type="text" class="form-control" id="SocialRasonRuc" name="SocialRasonRuc" readonly>
    </div>
    <div class="col-md-3">
      <label for="PhoneRuc" class="form-label">Teléfonos</label>
      <input type="text" class="form-control" id="PhoneRuc" name="PhoneRuc" readonly>
    </div>
    <div class="col-md-3">
      <label for="StatusRuc" class="form-label">Estado</label>
      <input type="text" class="form-control" id="StatusRuc" name="StatusRuc" readonly>
    </div>
    <div class="col-md-4">
      <label for="DepartamentRuc" class="form-label">Departamento</label>
      <input type="text" class="form-control" id="DepartamentRuc" name="DepartamentRuc" readonly>
    </div>
    <div class="col-md-4">
      <label for="ProvinceRuc" class="form-label">Provincia</label>
      <input type="text" class="form-control" id="ProvinceRuc" name="ProvinceRuc" readonly>
    </div>
    <div class="col-md-4">
      <label for="DistrictRuc" class="form-label">Distrito</label>
      <input type="text" class="form-control" id="DistrictRuc" name="DistrictRuc" readonly>
    </div>
    <div class="col-md-12">
      <label for="AddressRuc" class="form-label">Dirección</label>
      <input type="text" class="form-control" id="AddressRuc" name="AddressRuc" readonly>
    </div>

    <div class="col-md-4">
      <label for="NamesClient" class="form-label">Nombres</label>
      <input type="text" class="form-control" id="NamesClient" name="NamesClient" autocomplete="off">
    </div>
    <div class="col-md-4">
      <label for="LastnamesClient" class="form-label">Apellidos</label>
      <input type="text" class="form-control" id="LastnamesClient" name="LastnamesClient" autocomplete="off">
    </div>
    <div class="col-md-4">
      <label for="EmailClient" class="form-label">Correo</label>
      <input type="email" class="form-control" id="EmailClient" name="EmailClient" autocomplete="off">
    </div>


    <div class="col-md-3">
      <label for="" class="form-label">Comprobante</label>
      <select id="TicketTypeTicket" name="TicketTypeTicket" class="form-select">
        <option selected>Factura</option>
        <option>Cotización</option>
        <option>Boleta</option>
        <option>Boucher</option>
      </select>
    </div>

    <div class="col-md-3">
      <label for="" class="form-label">Moneda</label>
      <select id="MoneyTypeTicket" name="MoneyTypeTicket" class="form-select">
        <option selected>Soles</option>
        <option disabled>Dólares</option>
        <option disabled>Euros</option>
      </select>
    </div>

    <div class="col-md-3">
      <label for="" class="form-label">Forma de pago</label>
      <select id="PayTypeTicket" name="PayTypeTicket" class="form-select">
        <option selected>Depósito</option>
        <option>Efectivo</option>
        <option>Transferencia</option>
        <option disabled>Billetera Digital</option>
      </select>
    </div>

    <div class="col-md-3">
      <label for="" class="form-label">Tipo</label>
      <select id="ServiceTypeTicket" name="ServiceTypeTicket" class="form-select">
        <option selected>Producto</option>
        <option>Servicio</option>
      </select>
    </div>

    <div class="col-md-12 mt-4">
      <div class="col-12 d-flex justify-content-end">
        <a type="button" class="btn btn-warning" onClick="addItem()"> Añadir item </a>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col" width="6%"><small>Cant</small></th>
            <th scope="col" class="text-center"><small>Descripción</small></th>
            <th scope="col" width="24%"><small>P. Unitario</small></th>
          </tr>
        </thead>
        <tbody id="tbodyItem">
          <tr>
            <td><input type="number" class="form-control px-1" id="AmountItem1" name="AmountItem1" autocomplete="off" onkeyup="calculateTotal()" required></td>
            <td><input type="text" class="form-control" id="DescriptionItem1" name="DescriptionItem1" autocomplete="off" required></td>
            <td><input type="number" class="form-control px-1" id="PriceItem1" name="PriceItem1" onkeyup="calculateTotal()" required></td>
          </tr>
        </tbody>
      </table>
    </div>

            <!--<div class="col-12 d-flex justify-content-end">
              <div class="input-group mb-3 mx-2" style="width: 250px;">
                <span class="input-group-text">Sub Total</span>
                <input type="text" class="form-control" id="SubTotalTicket" name="SubTotalTicket" readonly>
              </div>

              <div class="input-group mb-3 mx-2" style="width: 250px;">
                <span class="input-group-text">IGV</span>
                <input type="text" class="form-control" id="IGVTicket" name="IGVTicket" readonly>
              </div>

              <div class="input-group mb-3 mx-2" style="width: 250px;">
                <span class="input-group-text">Total</span>
                <input type="text" class="form-control" id="TotalTicket" name="TotalTicket" readonly>
              </div>
            </div>
            <div>
              <input type="hidden" id="itemAmountTicket" name="itemAmountTicket">
            </div> -->
            <div class="container">
              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                  <div class="row">
                    <div class="col-4 text-center">
                      <span class="badge rounded-pill bg-warning">Sub Total</span>
                      <input class="form-control form-control-sm" type="text" id="SubTotalTicket" name="SubTotalTicket" readonly>
                    </div>
                    <div class="col-4 text-center">
                      <span class="badge rounded-pill bg-warning">IGV</span>
                      <input class="form-control form-control-sm" type="text" id="IGVTicket" name="IGVTicket" readonly>
                    </div>
                    <div class="col-4 text-center">
                      <span class="badge rounded-pill bg-warning">Total</span>
                      <input class="form-control form-control-sm" type="text" id="TotalTicket" name="TotalTicket" readonly>
                    </div>
                  </div>
                </div>
                <div>
                  <input type="hidden" id="itemAmountTicket" name="itemAmountTicket">
                </div>
              </div>
            </div>

            
            <div class="col-12 d-flex justify-content-end">
              <a type="button" class="btn btn-outline-success mx-2" onclick="calculateTotal()">Calcular</a>
              <button type="submit" class="btn btn-primary">Emitir Comprobante</button>
            </div>
          </form>
        </div>
