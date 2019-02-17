@extends('layouts.master')

@section('formulario')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">MI PERFIL</div>

                <div class="card-body">
                    <form method="POST" action="/user/myprofile/edit/{{Auth::user()->id}}" enctype="multipart/form-data">

                        {{method_field('PUT')}}
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-5 col-form-label text-md-right">Usuario: </label>

                            <div class="col-md-6">
                                <input id="nameOld" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="nameOld" value="{{Auth::user()->name}}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-5 col-form-label text-md-right">Email: </label>

                            <div class="col-md-6">
                                <input id="emailOld" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="emailOld" value="{{Auth::user()->email}}" required autofocus>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="passwordOld" class="col-md-5 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <a class="btn btn-warning text-white" href="/user/myprofile/edit/pass">Cambiar contraseña</a>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="addressshipping" class="col-md-5 col-form-label text-md-right">Dirección de envío: </label>

                            <div class="col-md-6">
                                <input id="addressshipping" type="text" class="form-control{{ $errors->has('addressshipping') ? ' is-invalid' : '' }}" name="addressshipping" value="{{Auth::user()->addressshipping}}" required autofocus>

                                @if ($errors->has('addressshipping'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('addressshipping') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="addressshippingPO" class="col-md-5 col-form-label text-md-right">CP dirección de envío: </label>

                            <div class="col-md-6">
                                <input id="addressshippingPO" type="text" class="form-control{{ $errors->has('addressshippingPO') ? ' is-invalid' : '' }}" name="addressshippingPO" value="{{Auth::user()->addressshippingPO}}" required autofocus>

                                @if ($errors->has('addressshippingPO'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('addressshippingPO') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="addressshippingcity" class="col-md-5 col-form-label text-md-right">Ciudad dirección de envío: </label>

                            <div class="col-md-6">
                                <input id="addressshippingcity" type="text" class="form-control{{ $errors->has('addressshippingcity') ? ' is-invalid' : '' }}" name="addressshippingcity" value="{{Auth::user()->addressshippingcity}}" required autofocus>

                                @if ($errors->has('addressshippingcity'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('addressshippingcity') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="addressshippingregion" class="col-md-5 col-form-label text-md-right">Provincia dirección de envío: </label>

                            <div class="col-md-6">
                                <input id="addressshippingregion" type="text" class="form-control{{ $errors->has('addressshippingregion') ? ' is-invalid' : '' }}" name="addressshippingregion" value="{{Auth::user()->addressshippingregion}}" required autofocus>

                                @if ($errors->has('addressshippingregion'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('addressshippingregion') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="addressbilling" class="col-md-5 col-form-label text-md-right">Dirección de facturación: </label>

                            <div class="col-md-6">
                                <input id="addressbilling" type="text" class="form-control{{ $errors->has('addressbilling') ? ' is-invalid' : '' }}" name="addressbilling" value="{{Auth::user()->addressbilling}}" required autofocus>

                                @if ($errors->has('addressbilling'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('addressbilling') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="addressbillingPO" class="col-md-5 col-form-label text-md-right">CP dirección de facturación: </label>

                            <div class="col-md-6">
                                <input id="addressbillingPO" type="text" class="form-control{{ $errors->has('addressbillingPO') ? ' is-invalid' : '' }}" name="addressbillingPO" value="{{Auth::user()->addressbillingPO}}" required autofocus>

                                @if ($errors->has('addressbillingPO'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('addressbillingPO') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="addressbillingcity" class="col-md-5 col-form-label text-md-right">Ciudad dirección de facturación: </label>

                            <div class="col-md-6">
                                <input id="addressbillingcity" type="text" class="form-control{{ $errors->has('addressbillingcity') ? ' is-invalid' : '' }}" name="addressbillingcity" value="{{Auth::user()->addressbillingcity}}" required autofocus>

                                @if ($errors->has('addressbillingcity'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('addressbillingcity') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="addressbillingregion" class="col-md-5 col-form-label text-md-right">Provincia dirección de facturación: </label>

                            <div class="col-md-6">
                                <input id="addressbillingregion" type="text" class="form-control{{ $errors->has('addressbillingregion') ? ' is-invalid' : '' }}" name="addressbillingregion" value="{{Auth::user()->addressbillingregion}}" required autofocus>

                                @if ($errors->has('addressbillingregion'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('addressbillingregion') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 text-md-center">
                                <input type="submit" value="Editar" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
