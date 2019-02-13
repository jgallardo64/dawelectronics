<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderLine;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /*public function showOrders($id){

    $usuario = User::where('id', $id)->first();
    return view('user.orders',  array('user' => $usuario));

    }*/

    public function showAdminPanel()
    {
        return view('user.admin.index');

    public function proveedores(){
        $arrayProveedores = Provider::all();
        return view('user.admin.proveedores', array('arrayProveedores' => $arrayProveedores));
    }

    public function usuarios()
    {
        $arrayUsuarios = User::all();
        return view('user.admin.usuarios', array('arrayUsuarios' => $arrayUsuarios));
    }

    public function borrarUsuario($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect('user/admin/usuarios');
    }    

    public function listarPedidosUsuarios()
    {
        $arrayPedidos = Order::all();
        return view('user.admin.pedidos', array('arrayPedidos' => $arrayPedidos));
    }

    public function mostrarPedidoUsuario($id)
    {
        $arrayLineasPedido = OrderLine::where('order_id', $id)->get();
        return view('user.admin.detallespedido', array('arrayLineasPedido' => $arrayLineasPedido));
    }
}
