<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContabilidadController extends Controller
{
    public function index()
    {
        return view('adb.contabilidad.index');
    }
}
