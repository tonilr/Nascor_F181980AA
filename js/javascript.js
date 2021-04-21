function valida_item(){
    let item=document.getElementById("item").value;
    console.log(item);
    if(item==""){
        document.getElementById("mensaje_item").innerHTML="Debes escribir un nombre";
        return false
    }else{
        document.getElementById("mensaje_item").innerHTML="";
        return true
    }
}
function valida_stock(){
    let stock=document.getElementById("stock").value;
    console.log(stock);
    if(stock==""){
        document.getElementById("mensaje_stock").innerHTML="Debes escribir una cantidad";
        return false
    }else{
        document.getElementById("mensaje_stock").innerHTML="";
        return true
    }
}
function valida_form(){
    if (valida_item() && valida_stock()){
        return true
    }else{
        return false
    }

}