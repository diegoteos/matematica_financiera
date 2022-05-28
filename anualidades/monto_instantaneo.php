<?php
include '../menu/menu-compuesto.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICC - Monto - interes instantaneo</title>
</head>

<body>
    <div class="container">
        <div class="p-5 bg-light">
            <div class="container">
                <h1 style='color:red'>Interes compuesto instantaneo:</h1>
                <h3>Formula para obtener el Monto</h3>
                <h3>M = C e^(ni)</h3>
                <hr class="my-2">
                <p>Ingrese los datos</p>
            </div>
        </div>
        <br>
        <form action="monto_instantaneo.php" method="post">
            <strong>Capital:</strong><br>
            <input type="number" step="any" name="capital" value="" class="col-sm-2 col-form-label" placeholder="Ingrese el capital" id="" required><br>
            <br><strong>Interes anual % </strong><br><input type="number" step="any" name="interes" value="" class="col-sm-2 col-form-label" placeholder="Interes anual en formato %" id="" required><br>
            <br><strong>Tiempo (años):</strong><br><input type="number" step="any" name="tiempo" value="" class="col-sm-2 col-form-label" placeholder="Duracion credito en años" id="" required><br>
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
            $potencia = $tiempo_duracion_credito * $tasa_anual;
            $euler = M_E ** $potencia;
            $resultado = $capital * $euler;
            $numeroFormateado = number_format($resultado, 2);
            echo "<h2 style='color:#FF0000'>El monto es de: Q$numeroFormateado<h2>";

            $totalInteres = $resultado - $capital;
            $numeroFormateado = number_format($totalInteres, 2);
            '<div class="container">';
            echo "<h4>El interes generado es de: Q$numeroFormateado<h4>";
        }
        ?>

</body>
</div>

</html>