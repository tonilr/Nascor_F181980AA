<?php
//Incluimos la configuración de la conexión
include "../db/conexion.php";
$conn=conexionDB();

if(!empty($_POST["item"])){ //Comprobamos si se ha introducido un item
    $item=$_POST["item"];
    //Configuramos la consulta para comprobar los items de la base de datos
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