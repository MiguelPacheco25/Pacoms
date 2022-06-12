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
})->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('quote', function () {
    return view('quote');
})->name('quote');


Route::get('/test', [ConsultController::class, 'downloadPdf'])->name('downloadPdf');

Route::middleware(['auth'])->group(function () {
    Route::post('/sendEmail', [MailController::class, 'send'])->name('sendEmail');
    Route::get('/@', [ConsultController::class, 'index'])->name('dashboard');
    Route::get('/consult', [ConsultController::class, 'create']);
    Route::get('/delete/{id}', [ConsultController::class, 'destroy'])->name('delete');
    Route::post('/acciones/storeConsult', [ConsultController::class, 'store']);
    Route::post('/acciones/search', [ConsultController::class, 'search'])->name('acciones.search');;
    Route::get('/registro', function () {
        return view('register');
    })->middleware(['auth'])->name('registro');
    Route::get('/inventory', function () {
        return view('inventario');
    })->middleware(['auth'])->name('inventory');
});


Route::fallback(function () {
    return view('notfound');
});

require __DIR__.'/auth.php';


