<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderLine;
use App\Product;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function listarPedidosUsuarios()
    {
        $arrayPedidos = Order::all();
        return view('orders.list', array('arrayPedidos' => $arrayPedidos));
    }

    public function listarPedidosUsuario()
    {
        $arrayPedidosUsuario = Order::where('user_id', Auth::user()->id)->get();
        return view('user.pedidos', array('arrayPedidosUsuario' => $arrayPedidosUsuario));
    }

    public function ultimosProductos(){
        $arrayPedidos = Order::all()
                ->sortByDesc('id')
                ->take(5);

        $arrayProductos = Product::all()
                ->sortBy('stock')
                ->take(5);
       return view('user.admin.index', array('arrayPedidos' => $arrayPedidos, 'arrayProductos' => $arrayProductos));
   }

    public function detallesPedidoUsuario($id)
    {
        $arrayLineasPedido = OrderLine::where('order_id', $id)->get();
        return view('orders.detalles', array('arrayLineasPedido' => $arrayLineasPedido));
    }
}
