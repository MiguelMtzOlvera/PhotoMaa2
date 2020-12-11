<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>PhotoMAA</title>
	<LINK rel = "shortcut icon" type = "image/x-icon" href ="<?php echo base_url();?>/assets/imagenes/Logotipo.png">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
	
	<script type="text/javascript"   src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
	<script type="text/javascript"   src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript"   src="<?php echo base_url();?>/assets/js/popper.min.js"></script>
	<script type="text/javascript"   src="<?php echo base_url();?>/assets/js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/main_tienda.css">
</head>
<body>

	<div class="container p-3 my-3 bg-dark text-white">
		<center><a class="nav-link" href="index.html"><img src="<?php echo base_url();?>/assets/imagenes/Logotipo.png" alt="Logotipo" width="225" height="210"></center></a>
			<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
				<ul class="navbar-nav ml-auto">
    				<li class="nav-item"><a href="<?php echo base_url();?>/index.php/loginregister/login">
      				<button type="button" class="btn btn-outline-info">Iniciar sesión</button></a>
    				</li></a>
    				<li class="nav-item"><a href="<?php echo base_url();?>/index.php/loginregister/register">
     				<button type="button" class="btn btn-outline-info">Registrate</button></a>
    				</li>
				</ul>
			</nav>

	</div>

	<div class="container p-3 my-3 bg-dark text-white">
		<div class="input-group md-form form-sm form-1 pl-0">
  			<div class="input-group-prepend">
    			<span class="input-group-text purple lighten-3" id="basic-text1"><i class="fas fa-search text-white"aria-hidden="true"></i></span>
  			</div>
  				<input class="form-control my-0 py-1" type="text" placeholder="Buscar" aria-label="Search">
  				<form class="form-inline" action="https://www.google.com.mx/">
					<button class="btn btn-info btn-rounded" type="submit">Buscar</button>
		</div>
  		</form>
	</div>

	<section class="container-fluid">
		<div class="row">
      <div class="col-lg-3 cold-md-3 col-sm-6 col-xs-12  bg-primary text-white btn btn-success">
        <ul class="navbar-nav mx-auto text-white   btn btn-success">
                    <li class="nav-item text-white"><a class="nav-link" href="<?php echo base_url();?>"><h3>Inicio</div></a></li></ul></h3>
      <div class="col-lg-4 cold-md-3 col-sm-6 col-xs-12  bg-primary text-white btn btn-success">
        <ul class="navbar-nav mx-auto text-white  btn btn-success">
                   <li class="nav-item text-white"><a class="nav-link" href="<?php echo base_url();?>/index.php/home/galeria"><h3>Galeria de Trabajos</div></a></li></ul></h3>
      <div class="col-lg-3 cold-md-3 col-sm-6 col-xs-12  d-sm-block bg-primary text-white btn btn-success">
        <ul class="navbar-nav mx-auto text-white  btn btn-success">
                   <li class="nav-item text-white"><a class="nav-link" href="<?php echo base_url();?>/index.php/home/tienda"><h3>Tienda</div></a></li></ul></h3>
      <div class="col-lg-2 cold-md-3 col-sm-6 col-xs-12 d-none d-sm-block bg-primary text-white btn  btn-success">
        <ul class="navbar-nav mx-auto text-white  btn btn-success">
                   <li class="nav-item text-white"><a class="nav-link" href="<?php echo base_url();?>/index.php/home/contacto"><h3>Contacto</div></a></li></ul></h3>
    </div>

		<div class="container">
			<center><p>
				<h1>Encuentra fotos en nuestro banco de imagenes libre de derechos</h1>
			</p></center>
		</div>


		<div class="container-fluid p-3 my-3 bg-dark text-white">
			<center><p class="font-italic">
				Encuentra la fotografia de PhotoMAA perfecta. Imagenes de alta calidad para web, redes sociales, folletos, anuncios y proyectos de marketing.  <br> Dile adiós al bloqueo creativo con las selecciones de nuestros expertos.</center>
			</p>
		</div>

		<div class="container-fluid p-3 my-3 bg-dark text-white d-none d-sm-block">
			<center><p class="font-italic">
				Cada mes, nuestros expertos visuales te facilitan la inspiración con conjunto de imágenes cuidadosamente seleccionadas entre las mejores fotos de stock de nuestro catálogo.
			</p>
		</div>
	</section>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  		<ol class="carousel-indicators">
    		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  		</ol>
  		<div class="carousel-inner">
    		<div class="carousel-item active">
      			<img class="d-block w-100" src="<?php echo base_url();?>/assets/imagenes/fondo2.jpg" alt="First slide">
    		</div>
    			<div class="carousel-item">
      				<img class="d-block w-100" src="<?php echo base_url();?>/assets/imagenes/fondo3.jpg" alt="Second slide">
    			</div>
   				 <div class="carousel-item">
      				<img class="d-block w-100" src="<?php echo base_url();?>/assets/imagenes/fondo4.jpg" alt="Third slide">
    			</div>
  			</div>
  				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    					<span class="sr-only">Anterior</span>
  				</a>
  				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    				<span class="carousel-control-next-icon" aria-hidden="true"></span>
    					<span class="sr-only">Siguiente</span>
  				</a>
	</div>
	<footer>
		<div class="container p-3 my-3  text-white">
		<center>Derechos Reservados © 2020 PhotoMAA, S.A. de C.V. Todos los derechos reservados.<br><cite><strong> Fecha: 11 de Diciembre del 2020</strong></cite></center>
		</div>



	</footer>

	<script type="text/javascript"   src="assets/js/login.js"></script>

</body>
</html>
