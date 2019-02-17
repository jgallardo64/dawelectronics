@extends('layouts.admin')

@section('masvendidos')

<br>

<div class="container">
    <div class="row">
        <div class="offset-2 col-sm-8 offset-2">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Importe</th>                  
                    <th scope="col">Stock</th>
                    <th scope="col">Veces vendido</th>
                </tr>
            </thead>
                @foreach ($arrayMasVendidos as $producto)
                    <tr>
                        <td>{{$producto->id}}</td>
                        <td>{{$producto->object}}</td>
                        <td>{{$producto->name}}</td>
                        <td>{{$producto->brand}}</td>
                        <td>{{$producto->model}}</td>
                        <td>{{$producto->price}} €</td>                         
                        <td>{{$producto->stock}}</td>
                        <td>{{$producto->stock}}</td>
                    </tr>
                @endforeach
        </table>
        </div>
    </div>
</div>


@stop