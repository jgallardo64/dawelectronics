<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Provider;

class ProvidersController extends Controller
{
    public function getProvider(){
        $arrayProveedores = Provider::all();
        return view('providers.index',  array('arrayProveedores' => $arrayProveedores));
    }
}
