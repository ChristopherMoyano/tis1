<?php
include ("conexion.php");

$nombre_recibido = $_POST["nombre"];
$origen_recibido = $_POST["origen"];
$logo_recibido = $_POST["logo"];
$id_recibido = $_POST["id"];

$update = "UPDATE marcas SET nombre = '$nombre_recibido', origen = '$origen_recibido', logo = '$logo_recibido' WHERE id = ".$id_recibido.";";
$resultado = mysqli_query($conexion, $update);

header("Location: index.php");

?>