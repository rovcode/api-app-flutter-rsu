@extends('layouts.applogin')
@section('title')Registro Delifazil @endsection
@section('content')
	
	<div class="container-login100" style="background-image: url('https://delifazil.com/assets/img/banner/b0.2.png');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-40 p-b-30">
			<form class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
                    <img src="https://delifazil.com/assets/img/logo.png" alt="delifazil" width="200">
                    <div class="text-center p-t-5 p-b-1">
                       <h4>TUS DATOS</h4>
                    </div>
				</span>
				<div class="wrap-input100 validate-input m-b-5" data-validate="Ingrese su usuario o teléfono">
					<input class="input100" type="text" name="username" placeholder="980866911">
					<span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-5" data-validate="Ingrese sus nombres">
					<input class="input100" type="text" name="username" placeholder="Rony Velásquez">
					<span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-5" data-validate="¿Donde estás?">
					<input class="input100" type="text" name="username" placeholder="Lima">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Ingrese contraseña">
					<input class="input100" type="password" name="pass" placeholder="Contraseña">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Registrarme
					</button>
				</div>
			</form>			
		</div>
	</div>
	@endsection