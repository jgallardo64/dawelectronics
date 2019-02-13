@extends('layouts.admin')

@section('listar')

<br>

<div class="container">
    <div class="row">
        <div class="offset-2 col-sm-8 offset-2">
            <form method="POST" action="">
                @csrf
                <div class="form-group row">
                    <label for="stock" class="col-md-4 col-form-label text-md-right">Consultar stock</label>
                    <div class="col-md-6">
                        <input id="stock" type="number" class="form-control" name="stock" required autofocus>
                    </div>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </form>
            @if (isset($arrayProductos))
                @if(count($arrayProductos)==0)
                    <h4>No hay productos que tengan menos de {{$stock}} unidades de stock</h4>
                @else
                    <h3>Productos con menos de {{$stock}} unidades en stock</h3>         
                    <table class="table table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Importe</th>                  
                                <th scope="col">Stock</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>                    
                        @foreach ($arrayProductos as $producto)                        
                            <tr>
                                <td>{{$producto->id}}</td>
                                <td>{{$producto->object}}</td>
                                <td>{{$producto->name}}</td>
                                <td>{{$producto->brand}}</td>
                                <td>{{$producto->model}}</td>
                                <td>{{$producto->price}} €</td>                         
                                <td>{{$producto->stock}}</td>
                                <td>
                                    <a href="{{url('user/admin/editarproducto/'.$producto->id)}}"><img src="{{url('images/edit.png')}}" width="20px" alt="Editar"></a> 
                                    <a href="{{url('user/admin/borrarproducto/'.$producto->id)}}"><img src="{{url('images/delete.png')}}" width="20px" alt="Borrar"></a>
                                </td>
                            </tr>                        
                        @endforeach
                    </table>
                @endif            
            @endif
        </div>
    </div>
</div>

@stop