<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function showOrders($id){
        $usuario = User::where('id', $id)->first();
        return view('user.orders',  array('user' => $usuario));
    }

    public function showAdminPanel(){
        return view('user.admin.index');
    }

    public function listar(){
        $arrayProductos = Product::all();
        return view('user.admin.listar', array('arrayProductos' => $arrayProductos));
    }

    public function nuevoProducto(){
        return view('user.admin.nuevoproducto');
    }
}
