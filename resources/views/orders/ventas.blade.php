@extends('layouts.admin')

@section('masvendidos')

<br>
<div class="container">
    <div class="row">
        <div class="offset-2 col-sm-8 offset-2">
        <h1>PRODUCTOS MAS VENDIDOS</h1>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Importe</th>                  
                    <th scope="col">Stock</th>
                    <th scope="col">Veces vendido</th>
                </tr>
            </thead>
                @foreach ($arrayMasVendidos as $masVendido)
                    <tr>
                        <td>{{$masVendido->product_id}}</td>
                        <td>{{$masVendido->brand}} {{$masVendido->model}}</td>
                        <td>{{$masVendido->price}} €</td>
                        <td>{{$masVendido->stock}}</td>
                        <td>{{$masVendido->vendidos}}</td>
                    </tr>
                @endforeach
        </table>
        </div>
    </div>
    <div class="row">
        <div class="offset-2 col-sm-8 offset-2">
        <h1>PRODUCTOS MENOS VENDIDOS</h1>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Importe</th>                  
                    <th scope="col">Stock</th>
                    <th scope="col">Veces vendido</th>
                </tr>
            </thead>
                @foreach ($arrayMenosVendidos as $masVendido)
                    <tr>
                        <td>{{$masVendido->product_id}}</td>
                        <td>{{$masVendido->brand}} {{$masVendido->model}}</td>
                        <td>{{$masVendido->price}} €</td>
                        <td>{{$masVendido->stock}}</td>
                        <td>{{$masVendido->vendidos}}</td>
                    </tr>
                @endforeach
        </table>
        </div>
    </div>
</div>


@stop