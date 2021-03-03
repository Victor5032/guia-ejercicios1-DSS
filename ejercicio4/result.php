<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 4</title>
        <link rel="shortcut icon" href="img/favicon.png" type="image/png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
        <header class="bg-warning py-3">
            <h2 class="text-center">Resultado</h2>
        </header>
        <section class="py-4">
            <div class="container">
                <div class="card" >
                    <div class="card-body">
                        <?php    
                            // Convertimos la cadena de texto en un arreglo
                            $numeros = explode(", ", $_POST['numeros']);

                            // Declaramos arreglos a usar
                            $cerosIngresados = array();
                            $numerosImpares = array();
                            $numerosNegativos = array();
                            $numerosPares = array();

                            // Almacenamos la cantidad de elementos del arreglo
                            $cantidad = count($numeros);

                            // Variable a usar para la respuesta
                            $respuesta = "";

                            // Recorremos el arreglo de los números que recibimos
                            for ($i = 0; $i < $cantidad; $i++) {
                                // Validamos que numeros ingresados son ceros 
                                if ($numeros[$i] == 0) {
                                    // Agregamos los valores a su respectivo array
                                    array_push($cerosIngresados, $numeros[$i]);
                                }

                                // Validamos que números son impares
                                if ($numeros[$i] % 2 != 0) {
                                    // Asignamos los números impares a su respectivo arreglo
                                    array_push($numerosImpares, $numeros[$i]);
                                } else {
                                    // Si el numero es par validamos que sea positivo
                                    if ($numeros[$i] > 0) {
                                        // Asignamos el numero par positivo a su respectivo arreglo
                                        array_push($numerosPares, $numeros[$i]);
                                    }
                                }

                                // Validamos si el número es negativo
                                if ($numeros[$i] < 0) {
                                    // Asignamos el número negativo a su respectivo arreglo
                                    array_push($numerosNegativos, $numeros[$i]);
                                }

                                // Concatenamos cada número en la variable respuesta
                                $respuesta .= (($i + 1) == $cantidad) ? $numeros[$i] : $numeros[$i] . ", " ;
                            }

                            // Porcentaje de ceros ingresados
                            $cerosCantidad = count($cerosIngresados);

                            $ceros = ($cerosCantidad * 100) / $cantidad;

                            // Promedio de imapres ingresados
                            $imparesCantidad = count($numerosImpares);

                            $impares = array_sum($numerosImpares) / $imparesCantidad;

                            // Varible que almacenara la respuesta de los numeros negativos
                            $negativos = "";

                            // Reordena el arreglo de forma descendente
                            rsort($numerosNegativos);
                            
                            // Recorremos los numeros negativos reordenados
                            foreach ($numerosNegativos as $numero) {
                                // Concatenamos los numeros positivos en la varible de respuesta
                                $negativos .= ($numero == end($numerosNegativos)) ? $numero : $numero . ", " ;
                            }

                            // Ordenamos de manera ascendente los numeros pares positivos
                            sort($numerosPares);

                            // Declarmos y asignamos valor a las variables
                            $mayorPar = $numerosPares[0];
                            $menorPar = end($numerosPares);
                        ?> 
                        <div class="card-body">
                            <p><strong>Números ingresados:</strong>&nbsp;<?php echo "{$respuesta} ({$cantidad})"; ?></p>
                            <p><strong>Porcentaje ceros ingresados: </strong><?php echo round($ceros, 2); ?>% (<?php echo $cerosCantidad; ?>)</p>
                            <p><strong>Promedio de valores impares ingresados: </strong><?php echo round($impares, 2); ?> (<?php echo $imparesCantidad; ?>)</p>
                            <p><strong>Números negativos (Desc):</strong>&nbsp;<?php echo $negativos; ?></p>
                            <p><strong>Número mayor positivo par:</strong>&nbsp;<?php echo $mayorPar; ?></p>
                            <p><strong>Número menor positivo par:</strong>&nbsp;<?php echo $menorPar; ?></p>
                        </div>
                    </div>
                </div>
                <br>
                <a href="index.php" class="btn btn-warning" disabled>Nuevo proceso</a>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>

