<?php
include '../menu/menu-simple.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interes simple: Capital y Monto</title>
</head>

<body>
    <div class="container">
        <div class="p-5 bg-light">
            <div class="container">
                <h1 style='color:red'>Interes simple:</h1>
                <h3>Formula para obtener el capital y monto:</h3>
                <h3>Capital = I / (n i)</h3>
                <h3>Monto = C + I </h3>
                <hr class="my-2">
                <p>Ingrese los datos</p>

            </div>
        </div>
        <form action="capital-monto.php" method="post">
            <br><strong>Interes generado:</strong><br>
            <input type="number" step="any" name="intereses" value="" class="col-sm-2 col-form-label" placeholder="Ingrese el interes" id="" required><br>
            <br><strong>Tasa de interes anual % </strong><br><input type="number" step="any" name="interes" value="" class="col-sm-2 col-form-label" placeholder="Tasa de interes anual en formato %" id="" required><br>
            <br><strong>Tiempo (años):</strong><br><input type="number" step="any" name="tiempo" value="" class="col-sm-2 col-form-label" placeholder="Duracion credito en años" id="" required><br>
            Si dividiste una cantidad de semanas, quincenas, meses, bimestres, etc., entre 12 para sacar la cantidad de años y como resultado
            te dio infinitos decimales, incluye unicamente 10 para que tu resultado sea mas optimo.
            <br><br><button class="btn btn-success" type="submit">Obtener resultados</button>
        </form>

        <?php



        if (!empty($_POST['intereses']) && !empty($_POST['interes']) && !empty($_POST['tiempo'])) {

            echo "<br><br>";
            $intereses = $_POST['intereses'];
            $interes = $_POST['interes'];
            $tiempo_duracion_credito = $_POST['tiempo']; // el periodo es igual a n en la formula correspondiente
            $tasa_anual = $interes / 100; //convertimos a notacion matematica el interes
            $multi  = $tiempo_duracion_credito * $tasa_anual;
            $capitalFinal = $intereses / $multi;
            $montoFinal = $intereses + $capitalFinal;
            $capitalFormateado = number_format($capitalFinal, 2);
            $montoFormateado = number_format($montoFinal, 2);
            '<div class="container">';
            echo "<h2 style='color:#FF0000'>El capital es de: Q$capitalFormateado <h2>";
            echo "<h2 style='color:#FF0000'>El monto total es de: Q$montoFormateado <h2>";
        }
        ?>

</body>
</div>

</html>