<div class="row" id="banner-top">
    <div class="offset-2 col-8 offset-2">
        <div class="row">
            <div class="d-none d-sm-block col-xl-6 col-md-12 col-sm-12 col-xs-12" id="banner-top-title">
                <strong>TIENDA DE COMPONENTES ELECTRÓNICOS</strong>
            </div>
        </div>
    </div>
</div>
<div class="row" id="banner-mid">

    {{-- LOGO --}}
    <div class="d-none d-md-block col-xl-3 col-lg-3 col-md-3 col-centered  ">
        <a href="{{url('/')}}"><img width="179" src="{{url('img/daw_electronics.png')}}"></a>
    </div>

    {{-- BÚSQUEDA --}}
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8 col-xs-8">
        <form action="{{url('/search')}}" method="post">
            @csrf
            <div class="input-group mb-3 barraBusqueda">                    
                <input type="text" class="form-control" placeholder="Busca aqui..." id="busqueda" name="busqueda">
                <div class="input-group-append">
                    <button class="btn btnBusqueda" type="submit"><i class="fa fa-search"></i></button>
                </div>                                            
            </div>
        </form>
    </div>

    {{-- LOGIN / REGISTRO--}}
    <div class="d-none d-md-block col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 col-centered">

        @if (Auth::check())       

        <button type="button" id="login" class="btn btn-primary" data-toggle="dropdown">
            <div class="tituloCategoria">{{ Auth::user()->name }} <span class="caret"></span></div>
        </button>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @if (Auth::user()->admin)
            <a class="dropdown-item" href="{{url('user/admin')}}">
                Panel Administrador</a>

            @else
            <a class="dropdown-item" href="{{url('user/pedidos')}}">
                Mis Pedidos</a>

            @endif
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        @else
        <button type="button" id="login" class="btn btn-primary" data-toggle="modal" data-target="#modalLogin">
            INICIAR SESIÓN / REGISTRARSE
        </button>
        @endif
        <!-- The Modal -->
        <div class="modal fade" id="modalLogin">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-center">INICIAR SESIÓN / REGISTRARSE</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-login-tab" data-toggle="tab" href="#nav-login"
                               role="tab" aria-controls="nav-login" aria-selected="true">Login</a>
                            <a class="nav-item nav-link" id="nav-register-tab" data-toggle="tab" href="#nav-register"
                               role="tab" aria-controls="nav-register" aria-selected="false">Registro</a>
                        </div>
                    </nav>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">
                                <form method="POST" action="{{route('login')}}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="emailRegister" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="emailRegister" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="passwordRegister" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="passwordRegister" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- CARRITO --}}
    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-centered ">
    <a href="/user/admin/carritoProv/">
                    <div class="cart_anchor">
                        <span class="totalItemsCartProv font-weight-bold text-white badge badge-pill badge-primary">

                            @isset($productosProv)
                                @if(!empty($productosProv))
                                    {{count($productosProv)}}
                                @endif
                            @endisset

                            @empty($productosProv)
                                
                            @endempty


                        </span>
                    </div>
                </a>

    </div>
</div>

<div class="row align-center" id="banner-bottom">
    <div class="offset-2 col-8 offset-2">
        <div class="mx-auto" style="width: 900px;">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" id="navbardrop">
                                PRODUCTOS
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('user/admin/listarproductos')}}">Listar productos</a>
                                <a class="dropdown-item" href="{{url('user/admin/nuevoproducto')}}">Añadir productos</a>
                                <a class="dropdown-item" href="{{url('user/admin/stock')}}">Consultar stock</a>
                                <a class="dropdown-item" href="{{url('user/admin/ventas')}}">Consultar ventas</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" id="navbardrop">
                                USUARIOS
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('user/admin/usuarios')}}">Listar usuarios</a>
                                <a class="dropdown-item" href="{{url('user/admin/pedidosusuarios')}}">Pedidos usuarios</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" id="navbardrop">
                                PROVEEDORES
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('user/admin/proveedores')}}">Listado</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>