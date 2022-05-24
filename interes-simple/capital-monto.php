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
                <h3>Formula para obtener el capital y monto:</h3>
                <h3>C = I / (n i)</h3>
                <hr class="my-2">
                <p>Ingrese los datos</p>

            </div>
        </div>
        <form action="capital2.php" method="post">
            <br><strong>Interes generado:</strong><br>
            <input type="number" step="any" name="intereses" value="" placeholder="Ingrese el interes" id="" required><br><br>
            <br><strong>Tasa de interes anual % </strong><br><input type="number" step="any" name="interes" value="" placeholder="Tasa de interes anual en formato %" id="" required><br><br>
            <br><strong>Tiempo (años):</strong><br><input type="number" step="any" name="tiempo" value="" placeholder="Duracion credito en años" id="" required><br><br>
            Si dividiste una cantidad de semanas, quincenas, meses, bimestres, etc., entre 12 para sacar la cantidad de años y como resultado
            te dio infinitos decimales, incluye unicamente 10 para que tu resultado sea mas optimo.
            <br><br><button type="submit">Obtener resultados</button>
        </form>
</body>
</div>

</html>

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
    echo "<h2>El capital es de: Q$capitalFormateado <h2>";
    echo "<h2>El monto total es de: Q$montoFormateado <h2>";
}
?>