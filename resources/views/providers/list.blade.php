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
                    <th scope="col">Carrito</th>
                </tr>
            </thead>
            
                @foreach ($arrayProductos as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->brand}}</td>
                        <td>{{$product->model}}</td>           
                        <td>
                            <span >{{$product->price}}€</span>
                        </td>
                        <td>
                        <span class="productId d-none">{{$product->id}}</span>
                        <button type="button" class="btn btn-primary addCartProv" type="submit">Añadir</button>
                            
                        </td></form>
                        
                        
                      
                    </tr>
                @endforeach
        </table>
        </div>
    </div>
</div>


@stop