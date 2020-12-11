<body>
	<table border="1">
		<thead>
			<tr>
				<th>id</th>
				<th>nombre</th>
				<th>apellido</th>
				<th>telefono</th>
				<th>correo</th>
				<th>contraseña</th>
				<th>comentario</th>
				</tr>
		</thead>
		<tbody>
			<?php
			foreach ($registro as $personas) {
			 	echo "<tr>";
			 	echo "<td>".$personas['id'];
			 	echo "<td>".$personas['nombre'];
			 	echo "<td>".$personas['apellido'];
			 	echo "<td>".$personas['telefono'];
			 	echo "<td>".$personas['correo'];
			 	echo "<td>".$personas['contrasenia'];
			 	echo "<td>".$personas['comentario'];
			 	echo "</tr>";
			 }
			?>
		</tbody>
	</table>
