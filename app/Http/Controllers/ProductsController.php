<?php

namespace App\Http\Controllers;

use App\Product;
use App\OrderLine;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function detallesProducto($id){
        $producto = Product::where('id', $id)->first();
        return view('products.index',  array('product' => $producto));
    }

    public function listarProductos()
    {
        $arrayProductos = Product::all();
        return view('products.listar', array('arrayProductos' => $arrayProductos));
    }

    public function menuStock()
    {
        return view('user.admin.stock');
    }

    public function comprobarStock(Request $request)
    {
        $stock = $request->stock;
        $arrayProductos = Product::all()->where('stock', '<=', $stock);
        return view('user.admin.stock', array('arrayProductos' => $arrayProductos, 'stock' => $stock));
    }

    public function menuNuevoProducto()
    {
        return view('products.nuevoproducto');
    }

    public function formNuevoProducto(Request $request)
    {
        $producto = new Product();
        $producto->object = $request->object;
        $producto->name = $request->name;
        $producto->brand = $request->brand;
        $producto->model = $request->model;
        $producto->description = $request->description;
        $producto->specifications = $request->specifications;
        $producto->price = $request->price;
        $producto->categoryid = $request->categoryid;
        $producto->subcategoryid = $request->subcategoryid;
        $producto->providerid = $request->providerid;
        $producto->stock = $request->stock;
        $producto->taxesid = $request->taxesid;
        $producto->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $producto->id;
            $extension = mb_strtolower($image->getClientOriginalExtension());
            $path = public_path('images');
            $imagepath = $request->image->move($path, $filename . '.' . $extension);
        }

        return redirect('user/admin');
    }

    public function menuEditarProducto($id)
    {
        $producto = Product::find($id);
        return view('products.editarproducto', array('producto' => $producto));
    }

    public function formEditarProducto(Request $request, $id)
    {
        $producto = Product::find($id);
        $producto->object = $request->object;
        $producto->name = $request->name;
        $producto->brand = $request->brand;
        $producto->model = $request->model;
        $producto->description = $request->description;
        $producto->specifications = $request->specifications;
        $producto->price = $request->price;
        $producto->categoryid = $request->categoryid;
        $producto->subcategoryid = $request->subcategoryid;
        $producto->providerid = $request->providerid;
        $producto->stock = $request->stock;
        $producto->taxesid = $request->taxesid;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $producto->id;
            $extension = mb_strtolower($image->getClientOriginalExtension());
            $path = public_path('images');
            $imagepath = $request->image->move($path, $filename . '.' . $extension);
        }

        $producto->save();

        return redirect('user/admin');
    }

    public function actualizarProducto($id)
    {
        $producto = Product::find($id);
        if ($producto->active == 0) {
            $producto->active = 1;
        } else {
            $producto->active = 0;
        }
        $producto->save();
        return redirect('user/admin/listarproductos');
    }

    public function masVendidos()
    {
        $arrayMasVendidos = DB::raw('SELECT o.product_id, sum(o.quantity) as cantidad
                            FROM order_lines O
                            group by o.product_id
                            order by cantidad DESC')->get();
        return redirect('user/admin/ventas', array('arrayMasVendidos' => $arrayMasVendidos));
    }
}