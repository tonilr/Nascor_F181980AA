<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/javascript.js"></script>
    <script src="js/jquery.js"></script>
    <title>Evaluación MF0492_3</title>
</head>
<body>
    <h1>Evaluación MF0492_3</h1>
    <form action="action/addItem.php" method="POST" id="formulario" onsubmit="return valida_form()">
        <label for="item">Item</label>
        <input type="text" name="item" id="item" onblur="valida_item()" oninput="check_item()">
        <div id="mensaje_item" class="advertencia"></div>
        <label for="stock">Stock</label>
        <input type="number" name="stock" id="stock" onblur="valida_stock()">
        <div id="mensaje_stock" class="advertencia"></div>
        <input type="submit" value="ENVIAR" id="boton">
    </form>
    <?php
    include "db/lista_items.php";
    echo imprimir_items();
    actualizar_fichero();
    ?>
    <a href="fichero/lista_compra.txt">Descargar lista de la compra</a>
    <p class="aviso">*Para descargar la lista: Clic derecho -> Guardar enlace como...</p>
</body>
</html>