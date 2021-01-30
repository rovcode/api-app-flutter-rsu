
@extends('layouts.applogin')
@section('title')Registro Delifazil @endsection
<style>
    .profile-edit-container.add-list-container {
   margin-top: 0px !important; 
  padding-bottom:0px !important; 

}
.add-list-media-header{
    margin-bottom: 5px !important;
}
.profile-edit-header{
    padding-bottom: 0px !important;
}
.freePlan{
    font-size: 15px !important;
}
</style>
@section('content')
	<div class="container-login100" style="background-image: url('https://delifazil.com/assets/img/banner/b0.2.png');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-40 p-b-30">
            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                @csrf
            <div id="datosUser">
				<span class="login100-form-title p-b-37">
                    <img src="https://delifazil.com/assets/img/logo.png" alt="delifazil" width="200">
                    <div class="text-center p-t-5 p-b-1">
                       <h4>TUS DATOS</h4>
                    </div>
                </span>
                <div class="form-group row">
                    <div class="wrap-input100 validate-input m-b-5" data-validate="Ingrese teléfono">
                        <input class="input100 @error('phone') is-invalid @enderror" id="phone" type="number" maxlength="9"  placeholder="980866911" name="phone" value="{{ old('email') }}" required autocomplete="phone" autofocus>
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
                        <input class="input100" id="name" type="text"" @error('name') is-invalid @enderror" name="name" placeholder="Rony Velásquez" required autocomplete="name" >
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
            </div>               
				<div class="container-login100-form-btn">                  
                    <button id="suscribe" type="submit" class="login100-form-btn">
                        {{ __('Suscribirme') }}
                    </button>
                   
                        <a class="btn btn-link" href="{{ route('login') }}">
                            {{ __('Ya tengo cuenta') }}
                        </a>
                   
				</div>
			</form>			
        </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function(){    
           
        });
    </script>
	
	@endsection