<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Delifazil</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="init/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="init/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="init/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="init/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="init/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="init/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="init/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="init/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="init/css/util.css">
	<link rel="stylesheet" type="text/css" href="init/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('https://delifazil.com/assets/img/banner/b0.2.png');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-40 p-b-30">
			<form class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
                    <img src="https://delifazil.com/assets/img/logo.png" alt="delifazil" width="200">
                    <div class="text-center p-t-1 p-b-1">
                        <span class="txt1">
                           ¡Súmate a esta gran revolución!
                        </span>
                    </div>
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Ingrese su usuario o teléfono">
					<input class="input100" type="text" name="username" placeholder="980866911">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Ingrese contraseña">
					<input class="input100" type="password" name="pass" placeholder="Contraseña">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<a class="login100-form-btn" href="dashboard">
						Iniciar Sesión
					</a>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						O inicie con
					</span>
				</div>

				<div class="flex-c p-b-20">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="login/images/icons/icon-google.png" alt="GOOGLE">
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

	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="init/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="init/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="init/vendor/bootstrap/js/popper.js"></script>
	<script src="init/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="init/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="init/vendor/daterangepicker/moment.min.js"></script>
	<script src="init/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="init/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="init/js/main.js"></script>

</body>
</html>