<?php
include "conexion.php";
$conn=conexionDB();
$id=$_GET["id"];
$sql="DELETE FROM items_compra WHERE id=$id";
$conn->query($sql);
$conn->close();
header("Location: ../");
?>