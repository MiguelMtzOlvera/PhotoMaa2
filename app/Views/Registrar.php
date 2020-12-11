<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Registrar</title>
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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/registrar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap-iso.css">
<script type="text/javascript"   src="<?php echo base_url();?>/assets/js/popper.min.js"></script>
<script type="text/javascript"   src="<?php echo base_url();?>/assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript"   src="<?php echo base_url();?>/assets/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap-datepicker3.css">


</head>
<body>
<div class="container-login100" style="background-image: url('<?php echo base_url();?>/images/fondo.jpg');">
	<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
		<form class="login100-form validate-form" action="<?php echo base_url();?>/index.php/loginregister/login" onsubmit="return validacion();">
 			<fieldset>
             	<legend class="text-center login100-form-title p-b-37">Registrar</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><img src="<?php echo base_url();?>/assets/imagenes/user.png" alt="Logotipo" width="55" height="45"></span>
                            <div class="col-lg-12 cold-md-9 col-sm-12 col-xs-14 ">

                              <input id="name" name="name" type="text" placeholder="Nombre" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><img src="<?php echo base_url();?>/assets/imagenes/user.png" alt="Logotipo" width="55" height="45"></span>
                            <div class="col-lg-12 cold-md-9 col-sm-12 col-xs-14">
                                <input id="lastname" name="name" type="text" placeholder="Apellidos" class="form-control">
                            </div>
                        </div>
  						<div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><img src="<?php echo base_url();?>/assets/imagenes/tick.png" alt="Logotipo" width="55" height="45"></span>
                            <div class="col-lg-12 cold-md-9 col-sm-12 col-xs-14">
                                <input id="password" name="Password" type="Password" placeholder="Password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><img src="<?php echo base_url();?>/assets/imagenes/call.png" alt="Logotipo" width="55" height="45"></span>
                            <div class="col-lg-12 cold-md-9 col-sm-12 col-xs-14">
                                <input id="phone" name="phone" type="text" placeholder="Teléfono" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><img src="<?php echo base_url();?>/assets/imagenes/pen.png" alt="Logotipo" width="55" height="45"></span>
                            <div class="col-lg-12 cold-md-9 col-sm-12 col-xs-14">
                                <textarea class="form-control" id="coment" name="message" placeholder="Comentario" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg" >Guardar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
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
	<script type="text/javascript"   src="<?php echo base_url();?>/assets/js/login.js"></script>
</body>
</html>
