<body>
	<table border="1">
		<thead>
			<tr>
				<th>nombre</th>
				</tr>
		</thead>
		<tbody>
			<?php
			foreach ($usuarios as $personas) {
			 	echo "<tr>";
			 	echo "<td>".$personas;
			 	echo "</tr>";
			 }
			?>
		</tbody>
	</table>
