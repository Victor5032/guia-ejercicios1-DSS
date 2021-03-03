<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 align-items-center d-flex justify-content-center">
                <form action="numPrimo.php" method="post">
                    <div class="card">
                      <div class="card-header">
                        Respuestas
                      </div>
                      <div class="card-body">
                        <?php
                            if(!empty($_POST["ingresadosPerisur"])){
                                if(!empty($_POST["ingresadosValle"])){
                                    if(!empty($_POST["ingresadosLomas"])){
                                        $ingresadosPerisur = $_POST["ingresadosPerisur"];
                                        $ingresadosValle = $_POST["ingresadosValle"];
                                        $ingresadosLomas = $_POST["ingresadosLomas"];

                                        echo "a) ¿Cuál fue el total anual de ventas de la agencia Lomas?<br>";

                                        $sumaLomas = array_sum($ingresadosLomas);
                                        
                                        echo "El total de ventas anual en la Agencia Lomas fue: $$sumaLomas<br><br>";

                                        $resultado = ($ingresadosPerisur[1] + $ingresadosValle[1] + $ingresadosLomas[1]) / 3;
                                        $resultado = number_format($resultado, 2);

                                        echo "b) ¿Cuál fue el promedio de ventas de Carro Fácil en el segundo trimestre del año?<br>El promedio de ventas en el segundo trimestre fue de: $$resultado<br><br>";

                                        $promedio3 = ($ingresadosPerisur[2] + $ingresadosValle[2] + $ingresadosLomas[2]) / 3;

                                        echo "c) ¿Cuáles agencias superaron el promedio de ventas del tercer trimestre?<br> El promedio del tercer trimestre fue de: $$promedio3<br>";

                                        if ($ingresadosPerisur[2] > $promedio3) {
                                            echo "La Agencia Perisur supero el promedio con: $$ingresadosPerisur[2]<br><br>";
                                        }
                                        if($ingresadosValle[2] > $promedio3){
                                            echo "La Agencia Valle supero el promedio con: $$ingresadosValle[2]<br><br>";
                                        }
                                        if($ingresadosLomas[2] > $promedio3){
                                            echo "La Agencia Lomas supero el promedio con: $$ingresadosLomas[2]<br><br>";
                                        }
                                        $t1 = ($ingresadosPerisur[0] + $ingresadosValle[0] + $ingresadosLomas[0]);
                                        $t2 = ($ingresadosPerisur[1] + $ingresadosValle[1] + $ingresadosLomas[1]);
                                        $t3 = ($ingresadosPerisur[2] + $ingresadosValle[2] + $ingresadosLomas[2]);
                                        $t4 = ($ingresadosPerisur[3] + $ingresadosValle[3] + $ingresadosLomas[3]);
                                        
                                        if($t1 < $t2 && $t1 < $t3 && $t1 < $t4){
                                            echo "d) ¿En qué trimestre se registraron las menores ventas del año, considerando a todas las agencias?<br>
                                            En el Trimestre 1 se registraron las menores ventas con: $$t1";
                                        }
                                        if($t2 < $t1 && $t2 < $t3 && $t2 < $t4){
                                            echo "d) ¿En qué trimestre se registraron las menores ventas del año, considerando a todas las agencias?<br>
                                            En el Trimestre 2 se registraron las menores ventas con: $$t2";
                                        }
                                        if($t3 < $t2 && $t3 < $t1 && $t3 < $t4){
                                            echo "d) ¿En qué trimestre se registraron las menores ventas del año, considerando a todas las agencias?<br>
                                            En el Trimestre 3 se registraron las menores ventas con: $$t3";
                                        }
                                        if($t4 < $t2 && $t4 < $t3 && $t4 < $t1){
                                            echo "d) ¿En qué trimestre se registraron las menores ventas del año, considerando a todas las agencias?<br>
                                            En el Trimestre 4 se registraron las menores ventas con: $$t4";
                                        }
                                    }
                                }
                            }
                        ?>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>