<?php

include "conexion.php";

$nom = $_POST["nom"];
$foto=$_FILES["foto"]["name"];//nombre de la foto
$ruta=$_FILES["foto"]["tmp_name"];//ruta en el disco duro
$destino="img/".$foto;//donde guardar la carpeta
copy($ruta,$destino);

mysqli_query($con, "insert into pelicula(nombre, imagen) values('$nom','$destino')");

?>