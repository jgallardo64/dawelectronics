@extends('layouts.admin')

@section('listar')

<div class="container">
                <div class="row">
                    <div class="offset-2 col-sm-8 offset-2">
                    <table id="listaProductos">
                        <tr>
                            <th>Producto</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>ID</th>
                            <th>Stock</th>
                        </tr>
                        @foreach ($arrayProductos as $producto)
                            <tr>
                                <td>{{$producto->name}}</td>
                                <td>{{$producto->brand}}</td>
                                <td>{{$producto->model}}</td>
                                <td>{{$producto->id}}</td>
                                <td>{{$producto->stock}}</td>
                            </tr>
                        @endforeach
                    </table>
                    </div>
                </div>
            </div>


@stop