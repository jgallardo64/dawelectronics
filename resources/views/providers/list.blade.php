@extends('layouts.admin')

@section('providers')

<br>

<div class="container">
    <div class="row">
        <div class="offset-2 col-sm-8 offset-2">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Tipo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Country</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Carrito</th>
                </tr>
            </thead>
                @foreach ($arrayProductos as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->brand}}</td>
                        <td>{{$product->model}}</td>           
                        <td>{{$product->price}}€</td>
                        <td><input type="number"></td>
                        <td><button type="button" class="btn btn-primary">Añadir</button></td>
                        
                        
                      
                    </tr>
                @endforeach
        </table>
        </div>
    </div>
</div>


@stop