 {{-- @extends('layouts.app') --}}

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
            </div>
        </div>
    </div>
</div>
@endsection  --}}
@extends('layouts.applogin')
@section('title')Login Delifazil @endsection
@section('content')
    	
	<div class="container-login100" style="background-image: url('https://delifazil.com/assets/img/banner/b0.2.png');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-40 p-b-30">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
				<span class="login100-form-title p-b-20">
                    <img src="https://delifazil.com/assets/img/logo.png" alt="delifazil" width="200">
                    <div class="text-center p-t-1 p-b-1">
                        <span class="txt1">
                           ¡Súmate a esta gran revolución!
                        </span>
                    </div>
                </span>
                <div class="form-group row">
                    {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}
                   <div class="col-md-12 wrap-input100 validate-input">
                        <input id="email" 
                        type="email" 
                        class=" input100
                        @error('email') is-invalid @enderror"
                         name="email" 
                         value="{{ old('email') }}" 
                         required autocomplete="email"
                          autofocus
                          placeholder="980866911" data-validate="Ingrese su usuario o teléfono"
                          >
                        <span class="focus-input100"></span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12 wrap-input100 validate-input">
                        <input 
                        id="password" 
                        type="password" 
                        class="input100   @error('password') is-invalid @enderror" name="password" 
                        required autocomplete="current-password"
                        placeholder="Contraseña" data-validate = "Ingrese contraseña"
                        >
                        <span class="focus-input100"></span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
              
               <!--input user-->
               {{-- <label  class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label> --}}

				{{-- <div class="wrap-input100 validate-input m-b-20  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" data-validate="Ingrese su usuario o teléfono"  required autocomplete="email" autofocus>
					<input id="email" for="email" type="email" class="input100"  name="email" placeholder="980866911">
                    <span class="focus-input100"></span>
                    @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div> --}}
                

               
               <!--input pass-->
               {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}
				{{-- <div class="wrap-input100 validate-input m-b-25" data-validate = "Ingrese contraseña">
					<input class="input100" id="password" type="password" name="password" placeholder="Contraseña" @error('password') is-invalid @enderror required autocomplete="current-password">
                    <span class="focus-input100"></span>
                    @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>            --}}



				<div class="container-login100-form-btn" style="margin-top: 5px !important">
					{{-- <a class="login100-form-btn" href="dashboard">
						Iniciar Sesión
                    </a> --}}
                    <button type="submit" class="login100-form-btn">
                        {{ __('Iniciar Sesión') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif
				</div>

				<div class="text-center p-t-5 p-b-20">
					<span class="txt1">
						O inicie con
					</span>
				</div>

				<div class="flex-c p-b-20">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="init/images/icons/icon-google.png" alt="GOOGLE">
					</a>
				</div>

				<div class="text-center">
					¿Aún no tiene cuenta?<a href="{{ route('register') }}" class="txt2 hov1">
						 Creala Aquí
					</a>
				</div>
			</form>			
		</div>
	</div>	
@endsection

