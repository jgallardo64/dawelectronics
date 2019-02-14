@extends('layouts.master')

@section('busqueda')

<br>

@foreach ($arrayProductos as $producto)
<div class="cardGen">

    <div class="card card-productos">
        <div><a href="{{url('product/'.$producto->id)}}"><img class="card-img-top" src="{{url('images/'.$producto->id)}}.png" alt="Card image cap"></a></div>
        <div class="card-body">
        <a href="{{url('product/'.$producto->id)}}"><h5 class="card-title">{{$producto->brand}} {{$producto->model}}</h5></a>
            <p class="card-text" id="product-price">{{$producto->price}}€</p>
        </div>
        <div class="card-footer">
         <button type="button" class="btn btn-primary" id="shop">Comprar</button>
                <small class="text-muted">Stock {{$producto->stock}}</small>
            </a>
        </div>
    </div>

</div>


@endforeach



@stop