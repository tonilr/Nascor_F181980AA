<?php
include "conexion.php";
// echo imprimir_items();
function imprimir_items(){
    $sql="SELECT * FROM items_compra";
    $conn=conexionDB();
    $resultado=$conn->query($sql);
    if ($resultado->num_rows > 0 ){
        $lista_items="<table><tr>
        <th>ID</th>
        <th>ITEM</th>
        <th>STOCK</th>
        <th>ELIMINAR</th></tr>";
        while ($fila = $resultado->fetch_assoc()){
            $lista_items.="<tr><td>".$fila['id']."</td><td>".$fila['item']."</td><td>".$fila['stock']."</td><td><a href=''>Eliminar item</a></tr>";
        }
        $lista_items.="</table>";
        return $lista_items;
    }/* else{
        echo "Hay algo mal";
    } */
}
?>