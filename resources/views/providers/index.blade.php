@extends('layouts.admin')

@section('providers')

<br>

<div class="container">
    <div class="row">
        <div class="offset-2 col-sm-8 offset-2">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nif</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Country</th>
                    <th scope="col">Pedido</th>
                </tr>
            </thead>
                @foreach ($arrayProveedores as $proveedor)
                    <tr>
                        <td>{{$proveedor->id}}</td>
                        <td>{{$proveedor->nif}}</td>
                        <td>{{$proveedor->email}}</td>
                        <td>{{$proveedor->name}}</td>
                        <td>{{$proveedor->country}}</td>
                        <td>
                        <a href="{{url('user/admin/productosProveedor/'.$proveedor->id)}}">
                            <button type="button" class="btn btn-primary">Pedir</button>
                        </a></td>

                        
                      
                    </tr>
                @endforeach
        </table>
        </div>
    </div>
</div>


@stop