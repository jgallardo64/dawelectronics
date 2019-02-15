<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderLine;
use App\User;
use App\Taxes;
use App\Product;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FinishOrderController extends Controller
{
    public function pagar() {

        $transaccion = DB::transaction(function () {

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
                /* SACAMOS IMPUESTO APLICADO AL PRODUCTO */
                $linea->taxApplied = Product::find($producto->id)->taxes->value;       
                $linea->quantity = $producto->cant;
                $totalPedido = $totalPedido + ($producto->price * $producto->cant);
                $linea->save();
                
            }
            $pedido->total = $totalPedido;
            $pedido->save();
        });

        if (is_null($transaccion)) {
            \Session::forget('carrito');
        }
        else {
            return back()->with('error', 1);
        }
    }
}
