@extends('layouts.admin')

@section('notificaciones')
<br>

<div class="container">
    <div class="row">
        <div class="offset-2 col-sm-8 offset-2">
        <h5><img src="{{url('images/warning.png')}}" width="20px" alt="!!">Productos bajos de stock</h5>

        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Importe</th>                  
                    <th scope="col">Stock</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
                @foreach ($arrayProductos as $producto)
                    <tr>
                        <td>{{$producto->id}}</td>
                        <td>{{$producto->object}}</td>
                        <td>{{$producto->brand}}</td>
                        <td>{{$producto->model}}</td>
                        <td>{{$producto->price}} €</td>                         
                        <td>{{$producto->stock}}</td>
                        <td>
                            @if ($producto->active == 1)
                                Activo
                            @else
                                De baja
                            
                            @endif
                        </td>
                        <td>
                        <a href="{{url('user/admin/productosproveedor/'.$producto->provider_id)}}">
                            <button type="button" class="btn btn-primary">Comprar</button>
                        </a></td>
                    </tr>
                @endforeach
        </table>
        </div>
    </div>
</div>
<br>

<div class="container">
    <div class="row">
        <div class="offset-2 col-sm-8 offset-2">
        <h5><img src="{{url('images/order.png')}}" width="20px" alt="!!">Ultimos pedidos recibidos</h5>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Total</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Detalles</th>
                </tr>
            </thead>
            @foreach ($arrayPedidos as $pedido)
                    <tr>
                        <td>{{$pedido->id}}</td>
                        <td>{{$pedido->user->name}}</td>
                        <td>{{$pedido->total}} €</td>
                        <td>{{$pedido->created_at}}</td>
                        <td>
                            <a href="{{url('user/admin/detallespedido/'.$pedido->id)}}">
                                <button type="button" class="btn btn-primary" id="shop">Detalles</button>
                        </td>
                    </tr>
                @endforeach
        </table>
        </div>
    </div>
</div>



@stop