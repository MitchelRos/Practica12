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
Route::get('/adb/clientes', [ClientesController::class, 'index'])->name('adb.clientes');

// Rutas de Facturación
Route::get('/adb/facturacion', [FacturacionController::class, 'index'])->name('adb.facturacion');

// Rutas de Contabilidad
Route::get('/adb/contabilidad', [ContabilidadController::class, 'index'])->name('adb.contabilidad');

