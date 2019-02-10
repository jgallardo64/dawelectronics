@extends('layouts.master')

@section('content')
<div class="tituloCategoria">
    <h1>
    @if (isset($subCategory))
        {{$subCategory}}
    @else
        {{$category}}
    @endif
</h1>
   
</div> 
@stop
@section('content1')

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
<script>

	/*Captura el valor e Id del producto  y lo pasa al carrito*/
	$(document).ready(function (){
		var cont = 0;
		$(this).on("click", "#shop", function(){
			var price = $(this).parent().parent().find('#product-price').text();
			var idPrice = $(this).parent().parent().find('#productId').val();
			$('#cantidad').text(cont);
			$('#carrito').text(price);
			
			idArr.push(idPrice);
			
		})
	});

</script>
@stop
