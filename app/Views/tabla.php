<body>
	<table border="1">
		<thead>
			<tr>
				<th>id</th>
				<th>nombre</th>
				</tr>
		</thead>
		<tbody>
			<?php
			foreach ($clasificacion as $valor) {
			 	echo "<tr>";
			 	echo "<td>".$valor['id']."</td>";
			 	echo "<td>".$valor['nombre']."</td>";
			 	echo "</tr>";
			 }
			?>
		</tbody>
	</table>
</body>
