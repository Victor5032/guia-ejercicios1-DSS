//Boton enviar todos
var btnEnviarTodos = document.getElementById("btnEnviarTodos");

//Select de ingresados
var ingresadosPerisur = document.getElementById("ingresadosPerisur");
var ingresadosValle = document.getElementById("ingresadosValle");
var ingresadosLomas = document.getElementById("ingresadosLomas");

//Botones
var aceptarPerisur = document.getElementById("aceptarPerisur");
var aceptarValle = document.getElementById("aceptarValle");
var aceptarLomas = document.getElementById("aceptarLomas");

//Inputs
var numeroPerisur = document.getElementById("numeroPerisur");
var numeroValle = document.getElementById("numeroValle");
var numeroLomas = document.getElementById("numeroLomas");

//Contadores
var contarPerisur = 0;
var contarValle = 0;
var contarLomas = 0;

function addProducts(optionMenu, value, texto){
   var posicion = optionMenu.length;
   optionMenu[posicion] = new Option(texto, value);
}

aceptarPerisur.onclick = function(){
    if(contarPerisur < 4){
        if(numeroPerisur.value == ""){
            alert("Ingrese el valor correspondiente");
            numeroPerisur.value = "";
        }else{
            contarPerisur++;
            addProducts(ingresadosPerisur, numeroPerisur.value, "Trimestre " + contarPerisur + ": $" + numeroPerisur.value);
            numeroPerisur.value = "";
        }
    }else{
        alert("Solo se permiten 4 valores");
        numeroPerisur.value = "";
    }
}

aceptarValle.onclick = function(){
    if(contarValle < 4){
        if(numeroValle.value == ""){
            alert("Ingrese el valor correspondiente");
            numeroValle.value = "";
        }else{
            contarValle++;
            addProducts(ingresadosValle, numeroValle.value, "Trimestre " + contarValle + ": $" + numeroValle.value);
            numeroValle.value = "";
        }
    }else{
        alert("Solo se permiten 4 valores");
        numeroValle.value = "";
    }
}

aceptarLomas.onclick = function(){
    if(contarLomas < 4){
        if(numeroLomas.value == ""){
            alert("Ingrese el valor correspondiente");
            numeroLomas.value = "";
        }else{
            contarLomas++;
            addProducts(ingresadosLomas, numeroLomas.value, "Trimestre " + contarLomas + ": $" + numeroLomas.value);
            numeroLomas.value = "";
        }
    }else{
        alert("Solo se permiten 4 valores");
        numeroLomas.value = "";
    }
}

btnEnviarTodos.onclick = function(){
    if(contarPerisur == 4){
        if(contarValle == 4){
            if(contarLomas == 4){
                for(var i=0; i < 4; i++){
                    ingresadosPerisur[i].selected = true;
                    ingresadosValle[i].selected = true;
                    ingresadosLomas[i].selected = true;
                }
                document.formulario.submit();
            }else{
                alert("No estan llenos todos los valores.");
            }
        }else{
            alert("No estan llenos todos los valores.");
        }
    }else{
        alert("No estan llenos todos los valores.");
    }
}



