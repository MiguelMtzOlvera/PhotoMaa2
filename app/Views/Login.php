<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Login</title>
	<LINK rel = "shortcut icon" type = "image/x-icon" href ="<?php echo base_url();?>/assets\imagenes\Logotipo.png">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/main1.css">

</head>
<body>
<div class="container-login100" style="background-image: url('<?php echo base_url();?>/images/fondo.jpg');">
	<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
		<form class="login100-form validate-form" action="<?php echo base_url();?>" onsubmit="return validacionF();">

			<span class="login100-form-title p-b-37"><img src="<?php echo base_url();?>/assets\imagenes\Logotipo.png" alt="Logotipo" width="205" height="105"><br>Iniciar Sesión
		</span>
	<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
		<input class="input100" type="text" name="username" placeholder="nombre o email" id="Name">
			<span class="focus-input100"></span>
	</div>
	<div class="wrap-input100 validate-input m-b-25" data-validate="Enter password">
		<input class="input100" type="password" name="pass" placeholder="contraseña" id="Password">
			<span class="focus-input100"></span>
	</div>
	<div class="container-login100-form-btn"><button class="login100-form-btn">INICIAR SESIÓN</button>
	</div></a></h3>
		<div class="text-center p-t-57 p-b-20">
			<span class="txt1">O inicie sesión con</span>
	</div>
			<div class="flex-c p-b-112">
				<a href="https://es-la.facebook.com/" class="login100-social-item"><img src="<?php echo base_url();?>/assets\imagenes\facebook.png" alt="facebook">
				</a>
				<a href="https://www.google.com.mx/" class="login100-social-item"><img src="<?php echo base_url();?>/assets\imagenes\google.png" alt="GOOGLE"></a>
			</div>
				<div class="text-center"><a href="<?php echo base_url();?>/index.php/loginregister/register" class="txt2 hov1">Únete</a>
				</div>
	</form>
	</div>
	</div>


	<script type="text/javascript"   src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript"   src="<?php echo base_url();?>/assets/js/popper.min.js"></script>
	<script type="text/javascript"   src="<?php echo base_url();?>/assets/js/main.js"></script>
	<script type="text/javascript"   src="<?php echo base_url();?>/assets/js/select2.min.js"></script>
	<script type="text/javascript"   src="<?php echo base_url();?>/assets/js/moment.min.js"></script>
	<script type="text/javascript"   src="<?php echo base_url();?>/assets/js/daterangepicker.js"></script>
	<script type="text/javascript"   src="<?php echo base_url();?>/assets/js/countdowntime.js"></script>
	<script type="text/javascript"   src="<?php echo base_url();?>/assets/js/main_1.js"></script>
	<script type="text/javascript"   src="<?php echo base_url();?>/assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript"   src="<?php echo base_url();?>/assets/js/animsition.min.js"></script>
	<script type="text/javascript"   src="<?php echo base_url();?>/assets/js/main.js"></script>
	<script type="text/javascript"   src="<?php echo base_url();?>/assets/js/login1.js"></script>


</body>
</html>
