
    <div class="container">
        <form class="row g-3 needs-validation" novalidate>
          <div class="col-md-3 has-validation">
            <label for="" class="form-label">RUC <span class="required">*</span></label>
            <input type="number" class="form-control" id="NumberRuc" onkeyup="consultRuc()" maxlength="11" required>
            <div class="invalid-feedback">
              *Ingresa un Ruc.
            </div>
          </div>
          <div class="col-md-9"></div>
          <div class="col-md-6">
            <label for="SocialRasonRuc" class="form-label">Razon Social</label>
            <input type="text" class="form-control" id="SocialRasonRuc" readonly>
          </div>
          <div class="col-md-3">
            <label for="PhoneRuc" class="form-label">Teléfonos</label>
            <input type="text" class="form-control" id="PhoneRuc" readonly>
          </div>
          <div class="col-md-3">
            <label for="StatusRuc" class="form-label">Estado</label>
            <input type="text" class="form-control" id="StatusRuc" readonly>
          </div>
          <div class="col-md-4">
            <label for="DepartamentRuc" class="form-label">Departamento</label>
            <input type="text" class="form-control" id="DepartamentRuc" readonly>
          </div>
          <div class="col-md-4">
            <label for="ProvinceRuc" class="form-label">Provincia</label>
            <input type="text" class="form-control" id="ProvinceRuc" readonly>
          </div>
          <div class="col-md-4">
            <label for="DistrictRuc" class="form-label">Distrito</label>
            <input type="text" class="form-control" id="DistrictRuc" readonly>
          </div>
          <div class="col-md-12">
            <label for="AddressRuc" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="AddressRuc" readonly>
          </div>

            <div class="col-md-4">
                <label for="NamesClient" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="NamesClient" autocomplete="off">
            </div>
            <div class="col-md-4">
                <label for="LastnamesClient" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="LastnamesClient" autocomplete="off">
            </div>
            <div class="col-md-4">
                <label for="EmailClient" class="form-label">Correo</label>
                <input type="email" class="form-control" id="EmailClient" autocomplete="off">
            </div>


            <div class="col-md-3">
                <label for="" class="form-label">Comprobante</label>
                <select id="TicketTypeTicket" class="form-select">
                  <option selected>Factura</option>
                  <option>Cotización</option>
                  <option>Boleta</option>
                  <option>Boucher</option>
                </select>
            </div>

            <div class="col-md-3">
                <label for="" class="form-label">Moneda</label>
                <select id="MoneyTypeTicket" class="form-select">
                  <option selected>Soles</option>
                  <option>Dólares</option>
                  <option>Euros</option>
                </select>
            </div>

            <div class="col-md-3">
                <label for="" class="form-label">Forma de pago</label>
                <select id="PayTypeTicket" class="form-select">
                  <option selected>Depósito</option>
                  <option>Efectivo</option>
                  <option>Transferencia</option>
                  <option>Billetera Digital</option>
                </select>
            </div>

            <div class="col-md-3">
                <label for="" class="form-label">Tipo</label>
                <select id="ServiceTypeTicket" class="form-select">
                  <option selected>Producto</option>
                  <option>Servicio</option>
                </select>
            </div>

            <div class="col-md-12 mt-4">
              <div class="col-12 d-flex justify-content-end">
                <a type="button" class="btn btn-warning" onClick="addItem()"> Añadir item </a>
              </div>
                <table class="table" id="tableItem">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col" width="10px">Cantidad</th>
                      <th scope="col">Descripción</th>
                      <th scope="col" width="20%">Precio Unitario</th>
                    </tr>
                  </thead>
                  <tbody id="tbodyItem">
                    <tr>
                      <th scope="row">1</th>
                      <td><input type="number" class="form-control" id="AmountItem1" autocomplete="off" required></td>
                      <td><input type="text" class="form-control" id="DescriptionItem1" autocomplete="off" required></td>
                      <td><div class="input-group mb-3">
                          <span class="input-group-text">S/. </span>
                          <input type="text" class="form-control" id="PriceItem1" required>
                        </div>
                        </td>
                    </tr>
                  </tbody>
                </table>
            </div>

            <div class="col-12 d-flex justify-content-end">
              <div class="input-group mb-3 mx-2" style="width: 250px;">
                <span class="input-group-text">Sub Total</span>
                <input type="text" class="form-control" id="SubTotalTicket" readonly>
              </div>

              <div class="input-group mb-3 mx-2" style="width: 250px;">
                <span class="input-group-text">IGV</span>
                <input type="text" class="form-control" id="IGVTicket" readonly>
              </div>

              <div class="input-group mb-3 mx-2" style="width: 250px;">
                <span class="input-group-text">Total</span>
                <input type="text" class="form-control" id="TotalTicket" readonly>
              </div>
            </div>

            
          <div class="col-12 d-flex justify-content-end">
            <a type="button" class="btn btn-outline-success mx-2" onclick="calculateTotal()">Calcular</a>
            <button type="submit" class="btn btn-primary">Emitir Comprobante</button>
          </div>
        </form>
    </div>
