@extends('layouts.master')


@section('content1')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 titulo-centrado">
        <h1>{{$product->brand}} {{$product->model}}</h1>

    </div>
    <span class="productIdDetail d-none">{{$product->id}}</span>
    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
        <img src="{{url('images/'.$product['id'])}}.png" style="width: 390px; heigth: 200px" alt="prueba">
        <div class="row price">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                {{$product->price}} € 
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <!--<a class="heart"></a>-->
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4"> 
                <button class="btn btn-warning">
                    <span class="glyphicon glyphicon-shopping-cart shopDetail">Carrito</span>
                </button>
            </div>
        </div>
        <hr>
        @if($product->id == 1)
            <video width="300" controls autoplay>
                <source src="/images/HP_movie.mov" type="video/mp4">
            </video>
        @endif
    </div>
    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <details open>
            <summary class="font-weight-bold">Especificaciones</summary>
            @php
            echo nl2br(htmlentities($product->specifications,ENT_QUOTES,'UTF-8'))
            @endphp 
        </details>
        <br>
        <details open>
            <summary class="font-weight-bold">Descripción </summary>
            {{$product->description}}
        </details>


    </div>

</div>

@stop