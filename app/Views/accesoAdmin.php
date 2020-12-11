	<title>Acceso Administrador</title>
				</li></ul></div></a></li></ul></div></a></li></ul></div></a></li></ul></div></div>
			<br>
			<br>
		<div class="container p-3 my-3 bg-dark text-white">
		<center><img src="<?php echo base_url();?>/assets/imagenes/Logotipo.png" alt="Logotipo" width="225" height="205"></center>
		<form>
			<div class="form-group">
			  	<label for="exampleInputEmail1">Dirección de email</label>
			  	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			  	<small id="emailHelp" class="form-text text-muted"><h4>Nunca compartiremos tu informacion personal.</h4></small>
			</div>
			<div class="form-group">
			  	<label for="exampleInputPassword1">Contraseña</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div class="form-group form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Recuerdame</label>
			</div>
			<br>
			<button type="button" class="btn btn-warning">Iniciar sesión</button>
			<button type="button" class="btn btn-info" onclick="location.href='<?php echo base_url();?>/index.php/admin/crear'">Agregar</button>
			<button type="button" class="btn btn-info" onclick="location.href='<?php echo base_url();?>/index.php/admin/modificar'">Actualizar</button>
			<button type="button" class="btn btn-info" onclick="location.href='<?php echo base_url();?>/index.php/admin/borrar'">Borrar</button>
		</form>
	</div>
