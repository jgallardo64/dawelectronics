@extends('layouts.admin')

@section('listar')

<br>

<div class="container">
    <div class="row">
        <div class="offset-2 col-sm-8 offset-2">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Registrado</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Provincia</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
                @foreach ($arrayUsuarios as $usuario)
                    <tr>
                        <td>{{$usuario->id}}</td>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>{{$usuario->created_at}}</td>
                        <td>{{$usuario->addressbillingcity}}</td>
                        <td>{{$usuario->addressbillingregion}}</td>                         
                        <td>
                        <a href="{{url('user/admin/editarusuario/'.$usuario->id)}}"><img src="{{url('images/edit.png')}}" width="20px" alt="Editar"></a> 
                        <a href="{{url('user/admin/usuarios/borrar/'.$usuario->id)}}"><img src="{{url('images/delete.png')}}" width="20px" alt="Borrar"></a>
                        </td>
                    </tr>
                @endforeach
        </table>
        </div>
    </div>
</div>


@stop