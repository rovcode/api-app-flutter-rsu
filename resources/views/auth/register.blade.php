{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
@endsection --}}
@extends('layouts.applogin')
@section('title')Registro Delifazil @endsection
@section('content')
	<div class="container-login100" style="background-image: url('https://delifazil.com/assets/img/banner/b0.2.png');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-40 p-b-30">
            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                @csrf
				<span class="login100-form-title p-b-37">
                    <img src="https://delifazil.com/assets/img/logo.png" alt="delifazil" width="200">
                    <div class="text-center p-t-5 p-b-1">
                       <h4>TUS DATOS</h4>
                    </div>
                </span>
                <div class="form-group row">
                    <div class="wrap-input100 validate-input m-b-5" data-validate="Ingrese teléfono">
                        <input class="input100 @error('phone') is-invalid @enderror" id="phone" type="number" maxlength="9"  placeholder="980866911" name="phone" value="{{ old('email') }}" required autocomplete="phone">
                        <span class="focus-input100"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="wrap-input100 validate-input m-b-5" data-validate="Ingrese su correo">
                        <input class="input100 @error('email') is-invalid @enderror" id="email" type="email"  placeholder="delifazil@gmail.com" name="email" value="{{ old('email') }}" required autocomplete="email">
                        <span class="focus-input100"></span>
                    </div>
                </div>
				<div class="form-group row">
                    <div  class="wrap-input100 validate-input m-b-5" data-validate="Ingrese sus nombres">
                        <input class="input100" id="name" type="text"" @error('name') is-invalid @enderror" name="name" placeholder="Rony Velásquez" required autocomplete="name" autofocus>
                        <span class="focus-input100"></span>
                    </div>
                </div>
                {{-- <div class="wrap-input100 validate-input m-b-5" data-validate="¿Donde estás?">
					<input class="input100" type="text" name="username" placeholder="Lima">
					<span class="focus-input100"></span>
				</div> --}}
                <div class="form-group row">
                    <div class="wrap-input100 validate-input m-b-5" data-validate = "Ingrese contraseña">
                        <input class="input100 @error('password') is-invalid @enderror" id="password" type="password"  name="password" required autocomplete="new-password" placeholder="Contraseña">
                        <span class="focus-input100"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="wrap-input100 validate-input m-b-25" data-validate = "Confirmar">
                        <input class="input100" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contraseña">
                        <span class="focus-input100"></span>
                    </div>
                </div>

				<div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        {{ __('Registrarme') }}
                    </button>
                   
                        <a class="btn btn-link" href="{{ route('login') }}">
                            {{ __('Ya tengo cuenta') }}
                        </a>
                   
				</div>
			</form>			
		</div>
	</div>
	
	@endsection