@extends('layouts.master')

@section('busqueda')

<br>

@foreach ($arrayProductos as $producto)

    <div class="card card-productos text-center">
        <span class="d-none productId" >{{$producto->id}}</span>

        <div>
            <a href="{{url('product/'.$producto->id)}}"><img class="card-img-top" src="{{url('images/'.$producto->id)}}.png" alt="Card image cap"></a></div>
        <div class="card-body">
            <a href="{{url('product/'.$producto->id)}}"><h5 class="card-title">{{$producto->brand}} {{$producto->model}}</h5></a>
            
        </div>
        
        <div class="align-text-bottom ">   
            <p class="card-text text-center font-orbitron" id="product-price">{{$producto->price}}€</p>
        </div>
        
        
        <div class="card-footer">
            <a class="btn btn-primary shop">Comprar</a>
            <small class="text-muted">Stock {{$producto->stock}}</small>

        </div>
    </div>

@endforeach



@stop