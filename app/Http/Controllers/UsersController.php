<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /*public function showOrders($id){

    $usuario = User::where('id', $id)->first();
    return view('user.orders',  array('user' => $usuario));

    }*/

    public function mostrarPanelAdmin()
    {
        return view('user.admin.index');
    }

    public function listarUsuarios()
    {
        $arrayUsuarios = User::all();
        return view('users.list', array('arrayUsuarios' => $arrayUsuarios));
    }

    public function borrarUsuario($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect('user/admin/usuarios');
    }    
}
