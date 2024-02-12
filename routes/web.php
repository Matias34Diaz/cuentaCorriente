<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CondicionFiscalController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\PagoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // Si el usuario ya está autenticado, redirigirlo a la página de inicio
    if (Auth::check()) {
        return redirect('/home'); // O a cualquier otra página de inicio
    }
    // De lo contrario, mostrar la vista de inicio de sesión
    return view('auth.login');
})->name('login');

Auth::routes();


Route::resource('cliente', App\Http\Controllers\ClienteController::class)->middleware('auth');
Route::resource('condicion-fiscal', App\Http\Controllers\CondicionFiscalController::class)->middleware('auth');
Route::resource('cuentas', App\Http\Controllers\CuentaController::class)->middleware('auth');
Route::resource('servicios', App\Http\Controllers\ServicioController::class)->middleware('auth');
Route::resource('pagos', App\Http\Controllers\PagoController::class)->middleware('auth');

// ->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






//
