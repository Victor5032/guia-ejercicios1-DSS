<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Decimal a binario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
    <header class="bg-danger py-3">
            <h2 class="text-center text-white">Decimal a binario</h2>
        </header>
        <section class="py-4">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <?php
                            // Comprobamos si exista la variable $_GET numero
                            if (!isset($_GET['numero'])) {
                        ?>
                            <form id="decimal-binario" name="decimal-binario" method="GET" autocomplete="off">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="numero_label">Ingrese el número que desea convertir a binario:</label>
                                        <input type="number" class="form-control" id="numero" name="numero" step="0" required>                                    
                                    </div>
                                    <div class="col-6">
                                        <br>
                                        <button type="submit" class="btn btn-danger">Calcular</button>
                                    </div>
                                </div>
                            </form>
                        <?php 
                            } else { 
                                // Incluimos la función agregar_ceros()
                                require_once 'function.php';

                                // Almacenamos el número ingresado
                                $numero = $_GET['numero'];
                                
                                // Array para almacenar los nibbles
                                $nibble = array();
                        ?>
                            <h5 class="card-title">Respuesta:</h5>
                            <br>
                            <center>
                        <?php 
                                // Validamos si el numero es menor a -128 o mayor a 127
                                if ($numero < -128 || $numero > 127) {
                                    // Mensaje de error
                                    echo "Numero invalido, solo se permite entre -128 a 127";
                                } else {
                                    // Almacenamos y convertimos a binario el numero ingresado
                                    $binario = decbin($numero);

                                    // Obtenemos la longitud del número
                                    $longitud = strlen($binario);

                                    // Validamos la longitud del número
                                    if ($longitud < 8) {
                                        // Agregamos los ceros en caso que poseea menos de 8 caracteres
                                        $binario = agregar_ceros($binario, 8);
                                    } elseif ($longitud > 8) {
                                        // Disminuimos los caracteres en caso que posea más de 8 caracteres
                                        $binario = substr($binario, -8);
                                    } 

                                    // Convertimos el binario en array de 2 elementos y almacenamos en el array $nibble
                                    $nibble = str_split($binario, 4);

                                    // Mostramos resultado
                                    echo "<p style='font-size: 20px;'>{$numero} = {$nibble[0]} {$nibble[1]}</p>";
                                }
                            } 
                        ?>
                            </center>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>
