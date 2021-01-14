<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('init/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('init/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('init/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('init/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('init/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('init/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('init/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('init/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('init/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('init/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	<div class="container-login100" style="background-image: url('https://delifazil.com/assets/img/banner/b0.2.png');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-40 p-b-30">
            
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <span class="login100-form-title p-b-37">
                        <img src="https://delifazil.com/assets/img/logo.png" alt="delifazil" width="200">
                        <div class="text-center p-t-5 p-b-1">
                           <h6>Recuperar Contraseña</h6>
                        </div>
                    </span>
                    <div class="form-group row">
                        {{-- <label  for="email" class="col-form-label text-md-right">{{ __('Dirección de correo') }}</label> --}}

                        <div class="col-md-12 wrap-input100">
                            <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo de recuperación">
                            <span class="focus-input100"></span>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="login100-form-btn">
                                {{ __('Enviar link') }}
                            </button>
                            <a class="btn btn-link" href="{{ route('login') }}">
                                {{ __('Ya tengo cuenta') }}
                            </a>
                        </div>
                    </div>
                </form>
                
        </div>
    </div>



<body>
    <div id="dropDownSelect1"></div>	
    <!--===============================================================================================-->
        <script src="{{asset('init/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('init/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('init/vendor/bootstrap/js/popper.js')}}"></script>
        <script src="{{asset('init/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('init/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('init/vendor/daterangepicker/moment.min.js')}}"></script>
        <script src="{{asset('init/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('init/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('init/js/main.js')}}"></script>
    
</body>
</html>
