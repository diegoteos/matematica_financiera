<?php
include '../menu/menu-simple.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interes simple: Capital / Intereses</title>
</head>

<body>
    <div class="container">
        <div class="p-5 bg-light">
            <div class="container">
                <h1 style='color:red'>Interes simple:</h1>
                <h3>Formula para obtener el capital:</h3>
                <h3>C = M / (1 + n i)</h3>
                <hr class="my-2">
                <p>Ingrese los datos</p>
            </div>
        </div>

        <form action="capital.php" method="post">
            <br><strong>Monto:</strong><br>
            <input type="number" step="any" name="monto" value="" class="col-sm-2 col-form-label" placeholder="Ingrese el monto" id="" required><br>
            <br><strong>Interes anual % </strong><br><input type="number" step="any" name="interes" class="col-sm-2 col-form-label" value="" placeholder="Interes anual en formato %" id="" required><br>
            <br><strong>Tiempo (años):</strong><br><input type="number" step="any" name="tiempo" value="" class="col-sm-2 col-form-label" placeholder="Duracion credito en años" id="" required><br>
            Si dividiste una cantidad de semanas, quincenas, meses, bimestres, etc., entre 12 para sacar la cantidad de años y como resultado
            te dio infinitos decimales, incluye unicamente 10 para que tu resultado sea mas optimo.
            <br><br><button class="btn btn-success" type="submit">Obtener resultados</button>
        </form>

        <?php



        if (!empty($_POST['monto']) && !empty($_POST['interes']) && !empty($_POST['tiempo'])) {

            echo "<br><br>";
            $capital = 0;
            $monto = $_POST['monto'];
            $interes = $_POST['interes'];
            $tiempo_duracion_credito = $_POST['tiempo']; // el periodo es igual a n en la formula correspondiente

            $tasa_anual = $interes / 100; // lo pasamos a notacion matematica
            $parentesis = 1 + $tiempo_duracion_credito * $tasa_anual;

            $resultado = $monto / $parentesis;

            $numeroFormateado = number_format($resultado, 2);
            '<div class="container">';
            echo "<h2><p style='color:#FF0000'>El capital es de: Q$numeroFormateado<h2>";

            $totalInteres = $monto - $resultado;
            $numeroFormateado = number_format($totalInteres, 2);
            echo "<h4>El interes generado es de: Q$numeroFormateado<h4>";
        }

        echo "<br><br>";
        ?>

</body>
</div>

</html>