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
        $arrayProductos = Product::where('provider_id', $provider)->get();
        return view('providers.list', array('arrayProductos' => $arrayProductos, 'provider_id' => $provider));
    }



    public function __construct() {

        //\Session::forget('carritoProv');

        if (!\Session::has('carritoProv')) {
            \Session::put('carritoProv', array());
        }
    }

    public function getCarritoProv() {
        if (\Session::has('carritoProv')) {
            $this->eachProductCartProv();
        }
        return view('providers.carritoProv'); 
        //, array('productos' => \Session::get('carrito')));
    }

    public function addcarritoProv($id) {

        $producto = Product::find($id);
        if ($producto == null)
            return 1;

        if (count(\Session::get('carritoProv')) != 0) {
            $productosProv = \Session::get('carritoProv');
            foreach ($productosProv as $key => $valor) {
                if ($valor->id == $id) {
                    $productosProv[$key]->cant++;
                    \Session::put('carritoProv', $productosProv);
                    $num = count(\Session::get('carritoProv'));
                    return $num;
                }
            }
            $producto->cant = 1;
            array_push($productosProv, $producto);
            \Session::put('carritoProv', $productosProv);
            $num = count(\Session::get('carritoProv'));
            return $num;
        } else {
            $producto->cant = 1;
            $productosProv = [$producto];
            \Session::put('carritoProv', $productosProv);
            $num = count(\Session::get('carritoProv'));
            return $num;
        }
    }

     /**
     * Resta una unidad del producto seleccionado
     * @param type $id Id del producto
     * @return int
     */
    public function unoMenoscarritoProv($id) {
        /**
         * Comprobación en base de datos de existencia
         */
        $producto = Product::find($id);
        if ($producto == null)
            return 1;

        if (count(\Session::get('carritoProv')) != 0) {

            /**
             * Recorre todos el carritoProv comprobando si el producto ya está agregado
             */
            $productosProv = \Session::get('carritoProv');
            foreach ($productosProv as $key => $valor) {
                if ($valor->id == $id) {

                    /**
                     * Resta una unidad al producto seleccionado
                     */
                    $productosProv[$key]->cant--;
                    if ($productosProv[$key]->cant == 0) {
                        $this->delcarritoProv($id);
                        $num = count(\Session::get('carritoProv'));
                        return $num;
                    }
                    $num = count(\Session::get('carritoProv'));
                    return $num;
                }
            }
            $num = count(\Session::get('carritoProv'));
            return $num;
        } else {
            $num = count(\Session::get('carritoProv'));
            return $num;
        }
    }

       /**
     * Borra el producto sin importar la cantidad
     * @param type $id Id del producto
     * @return int Resultado de la operación
     */
    public function delcarritoProv($id) {
        $productosProv = \Session::get('carritoProv');
        foreach ($productosProv as $key => $valor) {
            if ($valor->id == $id) {

                /**
                 * Elimiina del array un producto
                 */
                unset($productosProv[$key]);
                \Session::put('carritoProv', $productosProv);
                $num = count(\Session::get('carritoProv'));
                return $num;
            }
        }
        $num = count(\Session::get('carritoProv'));
        return $num;
    }

     /**
     * Calcula el precio de cada producto en relación con la cantidad dentro 
     * del carritoProv
     */
    public function eachProductCartProv() {
        $total = 0;
        $productosProv = \Session::get('carritoProv');
        foreach ($productosProv as $key => $valor) {
            $total = ($valor->cant * $valor->price);
            /**
             * Guarda en el array el calculo del valor del producto 
             */
            $productosProv[$key]->totalProducto = $total;
            \Session::put('carritoProv', $productosProv);
        }
    }
    
}
