@extends('layouts.master')

@section('formulario')
<br>

<div class="container">
    <div class="row justify-content-center">
        @if(isset($error))
        <div class="col-md-8 text-danger font-weight-bold text-center">
            {{$error}}
        </div>
        @endif
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">CAMBIAR CONTRASEÑA</div>

                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="passwordOld" class="col-md-4 col-form-label text-md-right">Contraseña actual: </label>

                            <div class="col-md-6">
                                <input id="passwordOld" type="password" class="form-control{{ $errors->has('passwordOld') ? ' is-invalid' : '' }}" name="passwordOld" required>

                                @if ($errors->has('passwordOld'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('passwordOld') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="newPassword1" class="col-md-4 col-form-label text-md-right">Nueva contraseña: </label>

                            <div class="col-md-6">
                                <input id="newPassword1" type="password" class="form-control{{ $errors->has('newPassword1') ? ' is-invalid' : '' }}" name="newPassword1" required>

                                @if ($errors->has('newPassword1'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('newPassword1') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="newPassword2" class="col-md-4 col-form-label text-md-right">Repite la contraseña: </label>

                            <div class="col-md-6">
                                <input id="newPassword2" type="password" class="form-control" name="newPassword2" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <input type="submit" class="btn btn-warning text-white" value="Cambiar contraseña">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop