<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5 align-items-center d-flex justify-content-center">
                    <form action="numPrimo.php" method="POST">
                        <div class="card">
                            <div class="card-header">
                                <?php
                                   if (!empty($_POST["ingresadosResistencias"])) {
                                        echo "Resistencias";
                                    } elseif (!empty($_POST["ingresadosCapacitores"])) {
                                        echo "Capacitores";
                                    }
                                ?>
                            </div>
                            <div class="card-body">
                                <?php
                                   extract($_POST);
                                   if (!empty($_POST["ingresadosResistencias"])) {
                                       $resistencias = $_POST["ingresadosResistencias"];
                                       
                                       if ($tipoConexionResistencias == "serie") {
                                           $count = count($resistencias);
                                           $r = array_sum($resistencias);

                                           echo "La asociación en serie de las $count resistencias ingresadas es equivalente a <br>poner una única resistencia de: $r kΩ (kilohmios).";
                                       } elseif($tipoConexionResistencias == "paralelo") {
                                           $resulSum = 0;
                                           $res = 0;
                                           $resultado = 0;

                                           for($i  =0; $i < count($resistencias); $i++){
                                               $res = $resistencias[$i];
                                               $resultado = (1/$res);
                                               $resulSum = $resulSum + $resultado;
                                           }

                                           $resulSum = 1/$resulSum;
                                           $resulSum = number_format($resulSum,2);

                                           echo "La asociación de resistencias en paralelo es equivalente a una única resistencia siempre y cuando el valor sea inferior a cada una de las que asocia.<br>En este caso esa unica resistencia seria: $resulSum kΩ (kilohmios).";
                                       }
                                   }
                                   
                                   if (!empty($_POST['ingresadosCapacitores'])) {
                                       $capacitores = $_POST["ingresadosCapacitores"];
                                       if ($tipoConexionCapacitores == "serie") {
                                           $resulSum = 0;
                                           $res = 0;
                                           $resultado = 0;

                                           for ($i = 0; $i < count($capacitores); $i++){
                                               $res = $capacitores[$i];
                                               $resultado = (1/$res);
                                               $resulSum = $resulSum + $resultado;
                                           }

                                           $resulSum = 1/$resulSum;
                                           $resulSum = number_format($resulSum,2);

                                           echo "La asociación de capacitores en serie es equivalente a un unico capacitor siempre y cuando el valor sea inferior a cada uno de los que asocia.<br> En este caso ese unico capacitor seria: $resulSum µF (microfaradios).";
                                       } elseif ($tipoConexionCapacitores == "paralelo") {
                                           $count = count($capacitores);
                                           $r = array_sum($capacitores);
                                           echo "La asociación en paralelo de los $count capacitores ingresados es equivalente a <br>poner un unico capacitor de: $r µF (microfaradios).";
                                       }
                                   }

                                ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
