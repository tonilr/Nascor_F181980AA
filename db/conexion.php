<?php
function conexionDB(){
    //Conexión a la base de datos
    $server="localhost";
    $user="pruebapractica";
    $password="pruebapractica";
    $bbdd="pruebapractica";
    //Conexión
    $conn = new mysqli($server, $user, $password, $bbdd);
    //Comprobamos la conexión
    if ($conn->connect_error){
        // $_SESSION["connectionError"]=1;
        return $conn;
    }else{
        return $conn;
    }
}

?>