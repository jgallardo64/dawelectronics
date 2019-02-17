@extends('layouts.master')

@section('pedidosUsuario')

<br>

<div class="container">
    <div class="row">
        <div class="offset-2 col-sm-8 offset-2">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Total</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Detalles</th>
                </tr>
            </thead>
            @foreach ($arrayPedidosUsuario as $pedido)
                    <tr>
                        <td>{{$pedido->id}}</td>
                        <td>{{$pedido->user->name}}</td>
                        <td>{{$pedido->total}} €</td>
                        <td>{{$pedido->created_at}}</td>
                        <td>
                            <a href="{{url('user/admin/detallespedido/'.$pedido->id)}}">
                                <button type="button" class="btn btn-primary" id="shop">Detalles</button>
                        </td>
                    </tr>
                @endforeach
        </table>
        </div>
    </div>
</div>

@stop