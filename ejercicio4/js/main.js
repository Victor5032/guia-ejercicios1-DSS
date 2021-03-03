const agregar_numero = document.getElementById('agregar-numero');
const datos = document.getElementById('datos');

var numeros_arreglo = [];

agregar_numero.addEventListener('submit', (e) => {
    e.preventDefault();
    
    let response = "";

    let data = new FormData(agregar_numero);
    
    if (isNaN(data.get('numero'))) {
        alert("El dato ingresado no es un números");
    } else {
        if (numeros_arreglo.length == 0) {
            response += data.get('numero');

            numeros_arreglo.push(data.get('numero'));
        } else {
            numeros_arreglo.push(data.get('numero'));

            for (let i = 0; i < numeros_arreglo.length; i++) {
                if ((i + 1) == numeros_arreglo.length) {
                    response += numeros_arreglo[i];
                } else {
                    response += numeros_arreglo[i] + ", ";  
                }                          
            }
        }

        if (numeros_arreglo.length > 2) {
            document.getElementById('enviar').disabled = false;
        }

        document.getElementById('numeros').value = response;
        
        agregar_numero.reset();
    }
});


