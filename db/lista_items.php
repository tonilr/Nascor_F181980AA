<?php
//Incluimos la configuración de la base de datos
include "conexion.php";

function imprimir_items(){
    //Configuramos la consulta de selección
    $sql="SELECT * FROM items_compra";
    $conn=conexionDB();
    //Guardamos el resultado de la consulta
    $resultado=$conn->query($sql);
    //Si hay resultados
    if ($resultado->num_rows > 0 ){
        //Configuramos la variable para tener la lista de items en formato tabla HTML
        $lista_items="<table class='tabla'><tr>
        <th>ID</th>
        <th>ITEM</th>
        <th>STOCK</th>
        <th>ELIMINAR</th></tr>";
        //Vamos añadiendo los resultados de la consulta a la tabla
        while ($fila = $resultado->fetch_assoc()){
            $lista_items.="<tr><td>".$fila['id']."</td><td>".$fila['item']."</td><td>".$fila['stock']."</td><td><a href='db/deleteItem.php?id=$fila[id]'>Eliminar item</a></tr>";
        }
        $lista_items.="</table>";
        $conn->close();//Cerramos conexión
        //Devolvemos la lista de items en formato tabla HTML
        return $lista_items;
    }
}

function actualizar_fichero(){
    $sql="SELECT * FROM items_compra";
    $conn=conexionDB();
    $resultado=$conn->query($sql);
    $contenido="";
    if($resultado->num_rows>0){
        //Inicializamos la variable que tendrá el contenido de la base de datos
        
        while($fila = $resultado->fetch_assoc()){
            //Mientras tengamos valores en la base de datos, los inyectamos en la variable para ser escritos en el fichero
            $contenido.=$fila['id']." ".$fila['item']." ".$fila['stock']."\n";
        }
    }
    //Configuramos el puntero hacia el fichero
    $archivo="fichero/lista_compra.txt";
    //Abrimos el fichero en modo escritura
    $fp= fopen($archivo,"w");
    //Escribimos en el fichero el contenido obtenido con la consulta a la base de datos
    fwrite($fp,$contenido);
    //Cerramos el puntero del fichero
    fclose($fp);
    //Cerramos la conexión a la base de datos
    $conn->close();

}
?>