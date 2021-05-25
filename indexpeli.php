<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO DE PELICULA</title>
</head>
<body>
<?php
 include "encabezado.php";
?>
<form action="manejadorpeli.php" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td><input type="text" name="nom" placeholder="Nombre de la pelicula" required></td>
			<td><input type="file" id="foto" name="foto"></td>
		</tr>
	</table>
	<input type="submit" name="enviar" value="enviar">
</form>

</body>
</html>