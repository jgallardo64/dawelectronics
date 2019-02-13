<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Provider;
use App\Product;

class ProvidersController extends Controller
{
    public function getProvider(){
        $arrayProveedores = Provider::all();
        return view('providers.index',  array('arrayProveedores' => $arrayProveedores));
    }

    public function getProductsProvider($provider)
    {
        $arrayProductos = Product::where('providerid', $provider)->where('active', 1)->get();
        return view('providers.list', array('arrayProductos' => $arrayProductos, 'providerid' => $provider));
    }
}
