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

Route::get('principal', [controlllerViews::class, 'ShowMain'])->name('main');
Route::get('registro', [controlllerViews::class, 'ShowRegistrer'])->name('registrer');

Route::post('submitRegistrer', [controlllerViews::class, 'PostRegistrer'])->name('saveRegistrer');


Route::get('registrarClientes', [controlllerViews::class, 'ShowRegistrerClient'])->name('registrerClient');
Route::post('submitclient', [controlllerViews::class, 'Postcliente'])->name('saveRegistrerClient');

Route::get('registro/create',[controladorBD::class, 'createLibro'])->name('libro.create');
Route::get('registrarCliente/create',[controladorBD::class, 'createLibro'])->name('cliente.create');

// Cliente
Route::get('CatClientes',[controladorBD::class, 'indexCliente'])->name('clientes.index');
Route::post('CatClientes',[controladorBD::class, 'storeCliente'])->name('clientes.store');
Route::get('CatClientes/create',[controladorBD::class, 'createCliente'])->name('cliente.create');

Route::get('CatClientes/{id}/edit',[controladorBD::class, 'editCliente'])->name('clientes.edit');
Route::put('CatClientes/{id}',[controladorBD::class, 'updateCliente'])->name('clientes.update');

Route::get('CatClientes/{id}/delete',[controladorBD::class, 'showCliente'])->name('clientes.eliminar');
Route::delete('CatClientes/{id}',[controladorBD::class, 'destroyCliente'])->name('clientes.destroy');

