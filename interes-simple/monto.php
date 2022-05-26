<?php
include '../menu/menu-simple.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interes simple: Monto</title>
</head>

<body>
    <div class="container">
        <div class="p-5 bg-light">
            <div class="container">
                <h1 style='color:red'>Interes simple:</h1>
                <h3>Formula para obtener el monto:</h3>
                <h3>M = C (1 + i n)</h3>
                <hr class="my-2">
                <p>Ingrese los datos</p>
            </div>
        </div>
        <form action="monto.php" method="post">
            <br><strong>Capital:</strong><br>
            <input type="number" step="any" name="capital" value="" class="col-sm-2 col-form-label" placeholder="Ingrese el capital" id="" required><br>
            <br><strong>Interes anual % </strong><br><input type="number" class="col-sm-2 col-form-label" step="any" name="interes" value="" placeholder="Interes anual en formato %" id="" required><br>
            <br><strong>Tiempo (años):</strong><br><input type="number" class="col-sm-2 col-form-label" step="any" name="tiempo" value="" placeholder="Duracion credito en años" id="" required><br>
            Si dividiste una cantidad de semanas, quincenas, meses, bimestres, etc., entre 12 para sacar la cantidad de años y como resultado
            te dio infinitos decimales, incluye unicamente 10 para que tu resultado sea mas optimo.
            <br><br><button class="btn btn-success" type="submit">Obtener resultados</button>
        </form>

        <?php



        if (!empty($_POST['capital']) && !empty($_POST['interes']) && !empty($_POST['tiempo'])) {

            echo "<br><br>";
            $monto = 0;
            $capital = $_POST['capital'];
            $interes = $_POST['interes'];
            $tiempo_duracion_credito = $_POST['tiempo']; // el periodo es igual a n en la formula correspondiente

            $tasa_anual = $interes / 100; // lo pasamos a notacion matematica
            $parentesis = 1 + $tiempo_duracion_credito * $tasa_anual;

            $resultado = $capital * $parentesis;

            $numeroFormateado = number_format($resultado, 2);
            '<div class="container">';
            echo "<h2 style='color:#FF0000'>El monto es de: Q$numeroFormateado<h2>";

            $totalInteres = $resultado - $capital;
            $numeroFormateado = number_format($totalInteres, 2);
            echo "<h4>El interes generado es de: Q$numeroFormateado<h4>";
        }
        ?>

</body>
</div>

</html>