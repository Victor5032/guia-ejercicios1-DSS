//Boton
var enviar = document.getElementById("btnEnviar");

//Input
var numero = document.getElementById("numero");

enviar.onclick = function(){
    if(numero.value == ""){
        alert("Ingrese un numero");
    }else if(numero.value < 0){
        alert("Ingrese un numero entero positivo");     
    }else if(numero.value == 0){
        alert("Ingrese un numero mayor a 0");
    }else if(numero.value > 0){
        document.getElementById('formulario').submit();
    }
}