<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inventario') }} 
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 my-2">
                    <div class="card">
                        <div class="card-header">
                          Trabajadores
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Felix Pacheco
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Juan Murga
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Carlos Rodriguez
                                </label>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="col-sm-6 my-2">
                    <div class="card">
                        <div class="card-header">
                          Materiales
                        </div>
                        <div class="card-body">
                            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                                <h4 id="list-item-1">Item 1</h4>
                                <p>...</p>
                                <h4 id="list-item-2">Item 2</h4>
                                <p>...</p>
                                <h4 id="list-item-3">Item 3</h4>
                                <p>...</p>
                                <h4 id="list-item-4">Item 4</h4>
                                <p>...</p>
                              </div>
                        </div>
                      </div>
                </div>
                <div class="col-sm-12 my-2">
                    <div class="card">
                        <div class="card-header">
                          Reporte
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Trabajador</th>
                                    <th scope="col">Material</th>
                                    <th scope="col">Fecha</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                      </div>
                </div>
              </div>
              
        </div>
        

    </x-slot>
  
 
</x-app-layout>
