@extends('layouts.admin')

@section('detallespedido')
@php
    $total = 0;
@endphp

<div class="container">
    <div class="row">
        <div class="offset-2 col-sm-8 offset-2">
            <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Producto</th>
                        <th scope="col">Importe</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                @foreach ($arrayLineasPedido as $lineaPedido)
                    @php
                        $totalProducto = $lineaPedido->product->price * $lineaPedido->quantity;
                        $total = $total + $totalProducto;
                    @endphp
                    <tr>
                        <td>{{$lineaPedido->product->name}} {{$lineaPedido->product->brand}} {{$lineaPedido->product->model}}</td>
                        <td>{{$lineaPedido->product->price}}</td>
                        <td>{{$lineaPedido->quantity}}</td>
                        <td>{{$totalProducto}}</td>
                    </tr>
                @endforeach
                    <tr>
                        <th scope="col">TOTAL PEDIDO</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">{{$total}}</th>
                    </tr>
            </table>
        </div>
    </div>
</div>
@stop