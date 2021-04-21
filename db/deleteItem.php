<?php
//Incluimos la configuración a la base de datos
include "conexion.php";
$conn=conexionDB();
//Guardamos el id enviado desde la url
$id=$_GET["id"];
//Configuramos la consulta para borrar el registro asociado al id enviado
$sql="DELETE FROM items_compra WHERE id=$id";
//Ejecutamos la consulta
$conn->query($sql);
//Cerramos la conexión y redirigimos a la página principal
$conn->close();
header("Location: ../");
die();
?>