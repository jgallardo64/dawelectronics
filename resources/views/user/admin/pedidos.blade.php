@extends('layouts.admin')

@section('pedidos')

<br>

<div class="container">
    <div class="row">
        <div class="offset-2 col-sm-8 offset-2">
            @foreach ($arrayPedidos as $pedido)
            <div class="cardGen">
                <div class="card card-pedidos">        
                    <div class="card-body">
                        <h3>Pedido # {{$pedido->id}}</h3>
                        <p>Relizado por: {{$pedido->user->name}}</p>
                        <p>Total del pedido: {{$pedido->total}} €</p>
                        <p>Realizado {{$pedido->created_at}}</p>
                    </div>
                    <div class="card-footer">                    
                        <a href="{{url('user/admin/detallespedido/'.$pedido->id)}}">
                            <button type="button" class="btn btn-primary" id="shop">Detalles</button>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@stop
