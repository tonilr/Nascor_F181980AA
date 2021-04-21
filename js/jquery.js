function check_item(){
    let item=document.getElementById("item").value;
    return $.ajax({ //Ajax
        url:"db/checkitem.php", //Archivo php de validación
        data: {item:item}, //El item a validar
        type: "POST", //Método de envío
        
        success: function(response){ //Si la respuesta es correcta
            if (response == 0){ //Si no hay ningún item que coincida en la base de datos
                // $("#mensaje_item").removeClass("advertencia");
                $("#mensaje_item").html("");
                $("#validacion_item").prop("value",true);
                // console.log (0);
            }else{//Si coincide algún item en la base de datos
                // $("#mensaje_item").addClass("advertencia");
                $("#mensaje_item").html("Este artículo ya está introducido en la lista");
                $("#validacion_item").prop("value",false);
                // console.log(1);
            }
        },
        error: function(){
            console.log("error");
        }
    });
}