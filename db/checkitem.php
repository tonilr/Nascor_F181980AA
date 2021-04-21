<?php
include "../db/conexion.php";
// sleep(1);
$conn=conexionDB();

if(!empty($_POST["item"])){ //Comprobamos si se ha introducido un item
    $item=$_POST["item"];
    $sql="SELECT `item` FROM `items_compra` WHERE `item`='$item'";
    $result=$conn->query($sql);
    if ($result->num_rows == 0){ //Comprobamos si coincide algún item 
        echo 0; //Si no hay coincidencias enviamos un 0
    }else{
        echo 1; //Si hay coincidencias enviamos un 1
    }
}

//Cerramos conexión
$conn->close();
?>