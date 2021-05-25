<!DOCTYPE html>
<html>
<head>
	<title>pagina de inicio</title>
</head>
<body>
<?php
	include "encabezado.php";
?>
<div class="titulo">
<center>
<font face="Lucida Handwriting" size="8" color="#ABEBC6">
	Cartelera de cine
</font>
</center>
</div>
<table border="0">
	<tr>
		<td>
			<div class="card">
  				<img src="img/peli1.jpg" class="card-img-top" alt="..." width="150px" height="150px">
  				<div class="card-body">
    				<h5 class="card-title">Pelicula 1</h5>
    				<p class="card-text">Sinopsis de la pelicula</p>
    				<a href="pelicula1.php" class="btn btn-primary">Ver más detalles</a>
  				</div>
			</div>
		</td>
		<td>
			<div class="card">
  				<img src="img/peli2.jpg" class="card-img-top" alt="..." width="150px" height="150px">
  				<div class="card-body">
    				<h5 class="card-title">Pelicula 2</h5>
    				<p class="card-text">Sinopsis de la pelicula</p>
    				<a href="#" class="btn btn-primary">Ver más detalles</a>
  				</div>
			</div>
		</td>
		<td>
			<div class="card">
  				<img src="img/peli3.jpeg" class="card-img-top" alt="..." width="150px" height="150px">
  				<div class="card-body">
    				<h5 class="card-title">Pelicula 3</h5>
    				<p class="card-text">Sinopsis de la pelicula</p>
    				<a href="#" class="btn btn-primary">Ver más detalles</a>
  				</div>
			</div>
		</td>
	</tr>
</table>
<a href="indexpeli.php">Ir al registro de pelicula</a>
<a href="mostrarpelis.php">MUESTRA LA CARTELERA</a>
<div class="texto1">
Elige tu pelicula favorita
</div>
<div class="texto2">
Pagina web de ejemplo CSS
</div>
</body>
</html>