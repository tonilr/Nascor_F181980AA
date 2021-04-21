<?php
//Incluimos la configuración de la conexión
include "../db/conexion.php";
$conn=conexionDB();
//Guardamos las variables para añadir a la base de datos
$item=$_POST["item"];
$stock=$_POST["stock"];
//Configuramos la consulta de inserción
$sql="INSERT INTO items_compra VALUES(NULL, '$item', '$stock')";
//Realizamos la consulta
$conn->query($sql);
//Cerramos la conexión y redirigimos a la página principal
$conn->close();
header("Location: ../");
die();
?>