<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function profileUser(){
        return view('users.edit');
    }

    public function editProfileUser(Request $request, $id){
        $usuario = User::find($id);

        $usuario->name=$request->nameOld;
        $usuario->email=$request->emailOld;
        $usuario->addressshipping=$request->addressshipping;
        $usuario->addressshippingPO=$request->addressshippingPO;
        $usuario->addressshippingcity=$request->addressshippingcity;
        $usuario->addressshippingregion=$request->addressshippingregion;
        $usuario->addressbilling=$request->addressbilling;
        $usuario->addressbillingPO=$request->addressbillingPO;
        $usuario->addressbillingcity=$request->addressbillingcity;
        $usuario->addressbillingregion=$request->addressbillingregion;
        $usuario->save();      
        return redirect('user/myprofile');
    }

    public function passProfileUser(){

        return view('users.editPass');

    }

    public function editPassProfileUser(Request $request){
        if(Hash::check($request->passwordOld, Auth::user()->password)){
            if($request->newPassword1 == $request->newPassword2){
                $user = User::find(Auth::user()->id);
                $user->password = bcrypt($request->newPassword1);
                $user->save();
                $error='';
                return view('users.edit');
            } else {
                $error = "Las contraseñas no coinciden";
                return view('users.editPass', array('error' => $error));
            }
        } else {
            $error = "La contraseña actual no coincide";
            return view('users.editPass', array('error' => $error));
        }
    }
}
