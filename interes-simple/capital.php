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
                <h2>Formula para obtener el capital:</h2>
                <h2>C = M / (1 + n i)</h2>
                <hr class="my-2">
                <p>Ingrese los datos</p>

            </div>
        </div>

        <form action="capital.php" method="post">
            <br><strong>Monto:</strong><br>
            <input type="number" step="any" name="monto" value="" placeholder="Ingrese el monto" id="" required><br><br>
            <br><strong>Interes anual % </strong><br><input type="number" step="any" name="interes" value="" placeholder="Interes anual en formato %" id="" required><br><br>
            <br><strong>Tiempo (años):</strong><br><input type="number" step="any" name="tiempo" value="" placeholder="Duracion credito en años" id="" required><br><br>
            Si dividiste una cantidad de semanas, quincenas, meses, bimestres, etc., entre 12 para sacar la cantidad de años y como resultado
            te dio infinitos decimales, incluye unicamente 10 para que tu resultado sea mas optimo.
            <br><br><button type="submit">Obtener resultados</button>
        </form>
</body>
</div>

</html>

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
    echo "<h2>El capital es de:<h2>";
    echo "<h1>Q$numeroFormateado<h1>";

    $totalInteres = $monto - $resultado;
    $numeroFormateado = number_format($totalInteres, 2);
    echo '<br>';
    echo "<h4>El interes generado es de:<h4>";
    echo "<h2>Q$numeroFormateado<h2>";
}
?>