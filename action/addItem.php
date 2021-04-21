<?php
include "../db/conexion.php";
$conn=conexionDB();
print_r($conn);
$item=$_POST["item"];
$stock=$_POST["stock"];
$sql="INSERT INTO items_compra VALUES(NULL, '$item', '$stock')";
$conn->query($sql);
header("Location: ../");
die();
?>