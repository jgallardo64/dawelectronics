<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderLine;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function listarPedidosUsuarios()
    {
        $arrayPedidos = Order::all();
        return view('orders.list', array('arrayPedidos' => $arrayPedidos));
    }

    public function detallesPedidoUsuario($id)
    {
        $arrayLineasPedido = OrderLine::where('order_id', $id)->get();
        return view('orders.detalles', array('arrayLineasPedido' => $arrayLineasPedido));
    }
}
