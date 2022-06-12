<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar nuevo comprobante de pago') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @include('consult.form')
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <div class="toast align-items-center text-white bg-success border-0"  role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                  <div class="toast-body">
                    <i class="fas fa-check-square"></i> Registrado.
                  </div>
                  <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
