//Select de ingresados
var ingresadosResistencias = document.getElementById("ingresadosResistencias");
var ingresadosCapacitores = document.getElementById("ingresadosCapacitores");

//Botones
var aceptarResistencias = document.getElementById("aceptarResistencias");
var aceptarCapacitores = document.getElementById("aceptarCapacitores");
//Enviar
var enviarResistencias = document.getElementById("enviarResistencias");
var enviarCapacitores = document.getElementById("enviarCapacitores");

//Inputs
var numeroResistencias = document.getElementById("numeroResistencias");
var numeroCapacitores = document.getElementById("numeroCapacitores");

//Contadores
var contarResistencias = 0;
var contarCapacitores = 0;

function addProducts(optionMenu, value, texto){
   var posicion = optionMenu.length;
   optionMenu[posicion] = new Option(texto, value);
}

aceptarResistencias.onclick = function(){
    if(numeroResistencias.value == ""){
        alert("Ingrese el valor correspondiente");
        numeroResistencias.value = "";
    }else{
        contarResistencias++;
        addProducts(ingresadosResistencias, numeroResistencias.value, "Resistencia " + contarResistencias + ": " + numeroResistencias.value + " kΩ");
        numeroResistencias.value = "";
    }
}

aceptarCapacitores.onclick = function(){
    if(numeroCapacitores.value == ""){
        alert("Ingrese el valor correspondiente");
        numeroCapacitores.value = "";
    }else{
        contarCapacitores++;
        addProducts(ingresadosCapacitores, numeroCapacitores.value, "Capacitor " + contarCapacitores + ": " + numeroCapacitores.value + " µF");
        numeroCapacitores.value = "";
    }
}

enviarResistencias.onclick = function(){
    if(ingresadosResistencias.length > 1){
        for(var i=0; i < ingresadosResistencias.length; i++){
            ingresadosResistencias[i].selected = true;
        }
        document.formularioResistencias.submit();    
    }else{
        alert("Ingrese mas resistencias");
    }   
}

enviarCapacitores.onclick = function(){
    if(ingresadosCapacitores.length > 1){
        for(var i=0; i < ingresadosCapacitores.length; i++){
            ingresadosCapacitores[i].selected = true;
        }
        document.formularioCapacitores.submit();    
    }else{
        alert("Ingrese mas resistencias");
    }   
}



