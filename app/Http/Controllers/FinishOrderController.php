<?php

namespace App\Http\Controllers;

use App\ProviderOrder;
use App\ProviderOrderLine;
use App\User;
use App\Order;
use App\OrderLine;
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
                    /* BAJAMOS EL STOCK DEL PRODUCTO DE LA LINEA RESTANDOLE LA CANTIDAD COMPRADA */
                    $prod = Product::find($producto->id);
                    $prod->stock = $prod->stock - $producto->cant;
                    $prod->save();
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
            return redirect('home');
        }
        else {
            return back()->with('error', 1);
        }
    }

    public function pagarProveedor() {

        $transaccion = DB::transaction(function () {

            $productos = \Session::get('carritoProv');
            $totalPedido = 0;
            $pedido = new ProviderOrder();
            $pedido->provider_id = Auth::user()->id;
            $pedido->save();
            
            foreach ($productos as $producto) {            

                $linea = new ProviderOrderLine();
                $linea->providerorder_id = $pedido->id;
                $linea->product_id = $producto->id;
                    /* SUBIMOS EL STOCK DEL PRODUCTO DE LA LINEA SUMANDOLE LA CANTIDAD COMPRADA */
                    $prod = Product::find($producto->id);
                    $prod->stock = $prod->stock + $producto->cant;
                    $prod->save();
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
            \Session::forget('carritoProv');
            return redirect('user/admin');
        }
        else {
            return back()->with('error', 1);
        }
    }
}
