<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacturacionController extends Controller
{
    public function index()
    {
        return view('adb.facturacion.index');
    }
}
