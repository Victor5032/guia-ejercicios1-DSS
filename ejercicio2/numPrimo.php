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
                        Verificacion de un numero primo
                      </div>
                      <div class="card-body">
                        <?php
                            extract($_POST);
                            
                            $divisiones = 1;
                            $residuo = 0;

                            do {
                                if ($numero % $divisiones == 0) {
                                    $residuo++;
                                }

                                $divisiones++;
                            } while ($divisiones < $numero);

                            if ($residuo == 1) {
                                echo "<span class='card-title'>El numero {$numero} es primo porque tiene unicamente dos divisores los cuales son: El mismo y el numero 1.</span>";
                            } else {
                                echo "<span class='card-title'>El numero {$numero} no es primo porque tiene mas divisores aparte de el mismo y el numero 1.</span>";
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