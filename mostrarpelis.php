<?php  

include "conexion.php";

$recibe = mysqli_query($con, "SELECT * FROM pelicula");

while($r= mysqli_fetch_array($recibe))
{
	echo "<h1>".$r['nombre']."</h1><br>";
	echo '<img src="'.$r["imagen"].'" width="100px" heigth="100px"';
	echo "<br>";
}


?>