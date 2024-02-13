<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CondicionFiscalController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ServicioController;


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

Route::resource('cliente', ClienteController::class)->middleware('auth');
Route::resource('condicion-fiscal', CondicionFiscalController::class)->middleware('auth');
Route::resource('cuentas', CuentaController::class)->middleware('auth');
Route::resource('servicios', ServicioController::class)->middleware('auth');
Route::resource('pagos', PagoController::class)->middleware('auth');

// ->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->name('home');
