@extends('layouts.admin')

@section('pedidos')

    @foreach ($arrayPedidos as $pedido)
    <div class="container">
    <div class="row">
        <div class="offset-2 col-sm-8 offset-2">
            <h3>Pedido nº {{$pedido->id}} del usuario {{$pedido->userid}}</h3>

            </fieldset>
        </div>
    </div>
</div>
    @endforeach

@stop
