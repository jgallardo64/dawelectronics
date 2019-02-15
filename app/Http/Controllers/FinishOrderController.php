<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderLine;
use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FinishOrderController extends Controller
{
    public function pagar() {
        $productos = \Session::get('carrito');  
        $totalPedido = 0;

        $pedido = new Order();
        $pedido->user_id = Auth::user()->id;
        $pedido->save();
        
        foreach ($productos as $producto) {            

            $linea = new OrderLine();
            $linea->order_id = $pedido->id;
            $linea->product_id = $producto->id;
            $linea->price = $producto->price;
            $linea->quantity = $producto->cant;
            $linea->save();
            \Session::forget('carrito');
        }        
    }
}
