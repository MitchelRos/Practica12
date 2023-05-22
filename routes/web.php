<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClientesController;
use App\Http\Controllers\Admin\FacturacionController;
use App\Http\Controllers\Admin\ContabilidadController;

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
// Ruta de inicio?
Route::get('/', function () {return view('welcome');});

// Rutas de Clientes
Route::get('/admin/clientes', [ClientesController::class, 'index'])->name('admin.clientes.index');

// Rutas de Facturación
Route::get('/admin/facturacion', [FacturacionController::class, 'index'])->name('admin.facturacion.index');

// Rutas de Contabilidad
Route::get('/admin/contabilidad', [ContabilidadController::class, 'index'])->name('admin.contabilidad.index');

