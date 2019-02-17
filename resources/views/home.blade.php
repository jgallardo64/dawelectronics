@extends('layouts.master')

@section('home')

<div class="offset-2 col-8 offset-2"> 
    @include('partials.carousel')
</div>

<hr>

<div class="tituloCategoria font-b612">
    <h1 id="nuevosproductos">ULTIMOS PRODUCTOS</h1>

</div> 
<div>

    <div class="c d-inline-block">
        <p id="status"></p>
        @foreach ($ultimosProductos as $producto)

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
    </div>
</div>

<hr>

<div class="tituloCategoria font-b612">
    <h1 id="interesante">QUIZÁS TE INTERESE</h1>
</div> 

<div>
    <div class="c d-inline-block">
        <p id="status"></p>
        @foreach ($productosCategoria as $producto)

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
    </div>
</div>

<hr>

<div class="tituloCategoria font-b612">
    <h1 id="categorias">NUESTRAS CATEGORIAS</h1>
</div> 

<div>
    <div class="c d-inline-block">
        <p id="status"></p>
        @foreach ($categorias as $categoria)

            <div class="card card-categorias text-center">
                <span class="d-none productId" >{{$categoria->id}}</span>

                <div>
                    <a href="{{url('category/'.$categoria->name)}}"><img class="card-img-top" src="{{url('images/'.$categoria->name)}}.png" alt="Card image cap"></a></div>
                    <div class="card-body">
                        <h5 class="card-title">{{$categoria->name}}</h5>                    
                    </div>
                </div>
        @endforeach 
    </div>
</div>

@include('partials.footer')
@stop