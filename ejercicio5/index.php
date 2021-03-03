<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Serie Fibonacci</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
        <header class="bg-dark py-3">
            <h2 class="text-center text-white">Serie Fibonacci</h2>
        </header>
        <section class="py-4">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <?php 
                            // Validamos si existe la variable $_GET limite
                            if (!isset($_GET['limite'])) { 
                        ?>
                            <form id="limite-serie" name="limite-serie" method="GET" autocomplete="off">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="numero_label">Ingrese el limite de la serie:</label>
                                        <input type="number" class="form-control" id="limite" name="limite" step="0" required>                                    
                                    </div>
                                    <div class="col-6">
                                        <br>
                                        <button type="submit" class="btn btn-warning">Calcular</button>
                                    </div>
                                </div>
                            </form>
                        <?php 
                            } else { 
                                // Limite de la serie
                                $limite = intval($_GET['limite']);
                                $fibonacci = array(0, 1);

                                // Contador
                                $i = 0;

                                // Varibale que almacena la respuesta
                                $respuesta = "";
                                
                                // Ciclo que recorre el arreglo $fibonacci y almacena los nuevos numeros en el mismo
                                while (true) {
                                    // Sumamos los 2 valores iniciales
                                    $suma = $fibonacci[$i] + $fibonacci[$i + 1];

                                    // Validamos que la nueva suma no sea mayor o igual al limite ingresado
                                    if ($suma > $limite) {
                                        // Rompemos el ciclo
                                        break;
                                    }

                                    // Almacenamos el resultado de la suma en el arreglo
                                    $fibonacci[] = $suma;
                                    
                                    // Aumenta 1 al contador
                                    $i++;
                                }
                                
                                // Recorremos el arreglo con los números de la serie
                                for ($i = 0; $i < count($fibonacci); $i++) {
                                    // Concatenamos los valores en la variable respuesta
                                    $respuesta .= $fibonacci[$i] . "&nbsp;\t&nbsp;\t&nbsp;\t";
                                }
                        ?>
                            <center>
                                <h4><strong>Limite: </strong><?php echo $limite; ?></h4>
                            </center>
                            <br>
                            <h5><strong>Resultado:</strong></h5>
                            <br>
                            <center>
                                <p style="font-size: 23px;"><?php echo $respuesta; ?></p>
                            </center>
                            <br>
                            <a href="index.php" class="btn btn-warning">Nuevo calculo</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>
