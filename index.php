<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/javascript.js"></script>
    <script src="js/jquery.js"></script>
    <title>Evaluación MF0492_3</title>
</head>
<body>
    <h1>Evaluación MF0492_3</h1>
    <form action="action/addItem.php" method="POST" onsubmit="return valida_form()">
        <label for="item">Item: </label>
        <input type="text" name="item" id="item" onblur="valida_item()" oninput="check_item()">
        <div id="mensaje_item"></div>
        <label for="stock">Stock: </label>
        <input type="number" name="stock" id="stock" onblur="valida_stock()">
        <div id="mensaje_stock"></div>
        <input type="submit" value="enviar">
    </form>
    <?php
    include "db/lista_items.php";
    echo imprimir_items();
    ?>
</body>
</html>