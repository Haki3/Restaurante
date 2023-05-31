<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BebidaController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\TicketController;

Route::get('/', function () {
    return view('auth.login');
});
Route::resource('bebidas', BebidaController::class);
Route::resource('platos', PlatoController::class);
Route::resource('pedidos', PedidoController::class);
Route::resource('tickets', TicketController::class);

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.welcome');
    })->name('admin.welcome');
});

Route::middleware(['auth', 'Camarero'])->prefix('Camarero')->group(function () {
    Route::get('/', function () {
        return view('camarero.welcome');
    })->name('camarero.welcome');
});

Route::middleware(['auth', 'Chef'])->prefix('Chef')->group(function () {
    Route::get('/', function () {
        return view('chef.welcome');
    })->name('chef.welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/tickets/{id}/pdf', [TicketController::class, 'generatePdf'])->name('tickets.pdf');
