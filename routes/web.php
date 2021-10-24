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

Route::get('/registro', function () {
    return view('register');
})->middleware(['auth'])->name('registro');

Route::post('/acciones/storeConsult', [ConsultController::class, 'store']);
Route::get('/consult', [ConsultController::class, 'create']);
Route::get('/delete/{id}', [ConsultController::class, 'destroy'])->name('delete');

Route::post('/sendEmail', [MailController::class, 'send'])->middleware(['auth'])->name('sendEmail');

require __DIR__.'/auth.php';
