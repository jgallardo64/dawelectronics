<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Provider;
use App\Product;

class ProvidersController extends Controller
{
    public function listarProveedores(){
        $arrayProveedores = Provider::all();
        return view('providers.index',  array('arrayProveedores' => $arrayProveedores));
    }

    public function listarProductosProveedor($provider)
    {
        $arrayProductos = Product::where('provider_id', $provider)->where('active', 1)->get();
        return view('providers.list', array('arrayProductos' => $arrayProductos, 'provider_id' => $provider));
    }
}
