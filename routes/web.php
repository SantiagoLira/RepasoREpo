<?php

use App\Http\Controllers\controladorBD;
use App\Http\Controllers\controlllerViews;
use Illuminate\Support\Facades\Route;

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
    return view('plantilla');
});

// Route::get('principal', [controlllerViews::class, 'ShowMain'])->name('main');
// Route::get('registro', [controlllerViews::class, 'ShowRegistrer'])->name('registrer');

// Route::post('submitRegistrer', [controlllerViews::class, 'PostRegistrer'])->name('saveRegistrer');


// Route::get('registrarClientes', [controlllerViews::class, 'ShowRegistrerClient'])->name('registrerClient');
// Route::post('submitclient', [controlllerViews::class, 'Postcliente'])->name('saveRegistrerClient');

Route::get('registro/create',[controladorBD::class, 'createLibro'])->name('libro.create');
Route::get('registrarCliente/create',[controladorBD::class, 'createLibro'])->name('cliente.create');
