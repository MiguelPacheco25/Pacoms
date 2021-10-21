<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultController;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ConsultController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/factura', function () {
    return view('facturas');
})->middleware(['auth'])->name('factura');

Route::get('/cotizacion', function () {
    return view('cotizaciones');
})->middleware(['auth'])->name('cotizacion');

Route::post('/acciones/storeConsult', [ConsultController::class, 'store']);

Route::get('/send', [MailController::class, 'send']);

require __DIR__.'/auth.php';
