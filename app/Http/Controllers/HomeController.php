<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

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
        $ultimosProductos = Product::all()->sortByDesc('created_at')->take(5);
        $productosCategoria = Product::where('category_id', rand(1, 6))->where('active', 1)->take(5)->get();
        $categorias = Category::all();
        return view('home', array('ultimosProductos' => $ultimosProductos, 'productosCategoria' => $productosCategoria, 'categorias' => $categorias));
    }

    public function busqueda(Request $request)
    {
        $arrayProductos = Product::where('object', 'like', '%'.$request->busqueda.'%')
                                ->orWhere('name', 'like', '%'.$request->busqueda.'%')
                                ->orWhere('brand', 'like', '%'.$request->busqueda.'%')
                                ->orWhere('price', $request->busqueda)
                                ->orWhere('model', 'like', '%'.$request->busqueda.'%')
                                ->get();

        return view('search', array('arrayProductos' => $arrayProductos));
    }
}
