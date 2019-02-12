@extends('layouts.admin')

@section('formulario')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EDITAR PRODUCTO</div>

                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">

                    {{method_field('PUT')}}

                    {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="object" class="col-md-4 col-form-label text-md-right">Producto</label>

                            <div class="col-md-6">
                                <input id="object" type="text" class="form-control" name="object" value="{{$producto->object}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$producto->name}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="brand" class="col-md-4 col-form-label text-md-right">Marca</label>

                            <div class="col-md-6">
                                <input id="brand" type="text" class="form-control" name="brand" value="{{$producto->brand}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="model" class="col-md-4 col-form-label text-md-right">Modelo</label>

                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control" name="model" value="{{$producto->model}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Descripcion</label>

                            <div class="col-md-6">
                                <textarea name="description" class="form-control" id="description" cols="30" rows="5" required>{{$producto->description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="specifications" class="col-md-4 col-form-label text-md-right">Especificaciones</label>

                            <div class="col-md-6">
                                <textarea name="specifications" class="form-control" id="description" cols="30" rows="5" required>{{$producto->specifications}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Precio</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="price" id="price" value="{{$producto->price}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="categoryid" class="col-md-4 col-form-label text-md-right">Categoria</label>

                            <div class="col-md-6">
                                <select name="categoryid" class="form-control" id="categoryid">

                                @php
                                $categorias = array(
                                    1  => 'Informatica',
                                    2 => 'Fotografia',
                                    3 => 'Telefonia',
                                    4 => 'Ocio',
                                    5 => 'Television',
                                    6 => 'Accesorios',
                                );

                                foreach ($categorias as $categoria => $texto) {
                                    if ($categoria==$producto->categoryid) {
                                        echo '<option value="'.$categoria.'" selected>'.$texto.'</option>';
                                    }
                                    else {
                                        echo '<option value="'.$categoria.'">'.$texto.'</option>';
                                    }
                                }
                                @endphp
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="subcategoryid" class="col-md-4 col-form-label text-md-right">Subcategoria</label>

                            <div class="col-md-6">
                                <select name="subcategoryid" class="form-control" id="subcategoryid">

                                    @php
                                    $subcategorias = array(
                                        1  => 'Portatiles',
                                        2 => 'PC de sobremesa',
                                        3 => 'Tablets',
                                        4 => 'Perifericos',
                                        5 => 'Camaras reflex',
                                        6 => 'Camaras evil',
                                        7 => 'Objetivos',
                                        8 => 'Camaras deportivas',
                                        9 => 'Smartphones',
                                        10 => 'Smartwatches',
                                        11 => 'Telefonia doméstica',
                                        12 => 'Videojuegos',
                                        13 => 'Consolas',
                                        14 => 'Televisores',
                                        15 => 'Proyectores',
                                        16 => 'Cables',
                                        17 => 'Cargadores',
                                        18 => 'Audio',
                                        19 => 'Video',
                                        20 => 'Baterias',

                                    );

                                    foreach ($subcategorias as $subcategoria => $texto) {
                                        if ($subcategoria==$producto->subcategoryid) {
                                            echo '<option value="'.$subcategoria.'" selected>'.$texto.'</option>';
                                        }
                                        else {
                                            echo '<option value="'.$subcategoria.'">'.$texto.'</option>';
                                        }
                                    }
                                    @endphp

                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                        $("#categoryid").change(function() {
                                            switch ($(this).val()) {
                                            case "1":
                                                $("#subcategoryid").html("<option value=1>Portatiles</option><option value=2>PC sobremesa</option><option value=3>Tablets</option><option value=4>Perifericos</option>");
                                                break;
                                            case "2":
                                                $("#subcategoryid").html("<option value=5>Camaras reflex</option><option value=6>Camaras evil</option><option value=7>Objetivos</option><option value=8>Camaras deportivas</option>");
                                                break;
                                            case "3":
                                                $("#subcategoryid").html("<option value=9>Smartphones</option><option value=10>Smartwatches</option><option value=11>Telefonia domestica</option>");
                                                break;
                                            case "4":
                                                $("#subcategoryid").html("<option value=12>Videojuegos</option><option value=13>Consolas</option>");
                                                break;
                                            case "5":
                                                $("#subcategoryid").html("<option value=14>Televisores</option><option value=15>Proyectores</option>");
                                                break;
                                            case "3":
                                                $("#subcategoryid").html("<option value=16>Cables</option><option value=17>Cargadores</option><option value=18>Audio</option><option value=19>Video</option><option value=20>Baterias</option>");
                                                break;
                                            default:
                                                $("#subcategoryid").html("<option value=0>-----</option>");
                                            }
                                        });
                                        });
                                    </script>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="provider" class="col-md-4 col-form-label text-md-right">Proveedor</label>

                            <div class="col-md-6">
                                <select name="providerid" class="form-control" id="providerid">
                                    <option value="1">Proveedor 1</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Imagen</label>

                            <div class="col-md-6">
                                <input type="file" name="image" id="image">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="taxesid" class="col-md-4 col-form-label text-md-right">Impuesto</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="taxesid" id="taxesid">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary form-control">
                                    Añadir producto
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
