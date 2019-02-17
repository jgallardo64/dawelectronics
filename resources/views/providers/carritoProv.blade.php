@extends('layouts.admin')

@section('carritoProv')
<br>

    @if(\Session::get('error'))
    <div class="alert alert-danger">Hay habido un error con tu compra, inténtalo más tarde</div>
    @endif
    
    <div class="tituloCategoria">
        
        <h1>CARRITO DEL PROVEEDOR</h1>
    </div>
    <table class="table table-hover col-lg-12">
        <thead class="text-white bg-info text-center">
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Unidades</th>
                <th>Subtotal</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @php
            $total = 0;
            $i = 0;
            @endphp
            @foreach($productosProv as $producto)
            @php
            $total = $total + $producto->totalProducto;
            @endphp
            <tr>
                <td><a href="/product/{{$producto->id}}">{{$producto->brand}} {{$producto->model}} </a></td>
                <td class="text-center">
                    <span id="priceStatic{{$producto->id}}">{{$producto->price}}</span>€
                </td>



                <td class="text-center">
                    <span id="udsProv{{$producto->id}}" class="cantidadProv ">
                        <span class="d-none priceDBProv">{{$producto->price}}</span>
                        <span class="valorProv text-center">{{$producto->cant}}</span>
                        <span class="btn btn-sm btn-success masProv text-center">+</span> 
                        <span class="btn btn-sm btn-danger menosProv text-center">-</span>
                    </span>
                <td class="text-center">
                    <span id="price{{$producto->id}}" class="subtotalProv" >{{$producto->totalProducto}}</span>
                </td>
                <td class="text-right ">
                    <span class="btn btn-sm btn-danger borrarLineaProv" >Borrar</span>
                </td>
            </tr>
            @php
            $i++;
            @endphp

            @endforeach 
        </tbody>
        <tfoot class="border bg-dark">
            <tr>  
               <td colspan="2"><span class="btn btn-danger" id="emptyCartProv">Vaciar Carrito</span></td>              
                <td colspan="3"></td>
            </tr>
        </tfoot>
    </table>



    <table class="border border-info float-right col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6">
        <thead>
        <th colspan="2" class="bg-info text-center text-white">Detalle Compra</th>
        </thead>
        <tbody class="border border-info">
            <tr class="border border-info">
                <td class="col-lg-2">Subtotal</td>
                <td class="text-right col-lg-2" >
                    <span class="text-right" id="totalBeforeTaxProv">{{number_format(($total/1.21),2)}}</span>€
                </td>
            </tr>
            <tr class="border border-info">
                <td class="col-lg-2">Iva </td>
                <td class="text-right col-lg-2" >
                    <span class="text-right" id="totalTaxProv">{{number_format((($total/1.21)*0.21 ),2)}}</span>€
                </td>

            </tr>
            <tr class="border border-info">
                <td class=" col-lg-2">Total</td>
                <td class="text-right col-lg-2" >
                    <span class="totalPriceProv" id="totalPriceProv">{{number_format($total ,2)}}</span>€
                </td>
            </tr>
            <tr class="border border-info col-lg-4">

                <td colspan="2" class="text-center">
                    <form action="{{url('pagar')}}" method="post">
                        @csrf
                        <input class="btn btn-dark text-white" type="submit" value="Realizar compra" name="compra" id="compra"></td>
                    </form>
            </tr>
        </tbody>
        <tfoot></tfoot>
    </table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


@stop