<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function busqueda(Request $request)
    {
        $arrayProductos = Product::where('brand', 'like', '%'.$request->busqueda.'%')->get();
         
        
        //return var_dump($arrayProductos);
        return view('search', array('arrayProductos' => $arrayProductos));
    }
}
