<?php
include '../menu/menu-simple.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interes simple: tasa interes anual %</title>
</head>

<body>
    <div class="container">
        <div class="p-5 bg-light">
            <div class="container">
                <h1 style='color:red'>Interes simple:</h1>
                <h3>Formula para obtener la tasa de interes anual:</h3>
                <h3>i = I / (C + n i)</h3>
                <hr class="my-2">
                <p>Ingrese los datos</p>
            </div>
        </div>
        <form action="tasa-interes.php" method="post">
            <br><strong>Total de interses:</strong><br>
            <input type="number" step="any" name="intereses" value="" class="col-sm-2 col-form-label" placeholder="Ingrese los intereses" id="" required><br>
            <br><strong>Capital: </strong><br><input type="number" step="any" name="capital" value="" class="col-sm-2 col-form-label" placeholder="Ingrese el capital:" id="" required><br>
            <br><strong>Tiempo (años):</strong><br><input type="number" step="any" name="tiempo" value="" class="col-sm-2 col-form-label" placeholder="Duracion credito en años" id="" required><br>
            Si dividiste una cantidad de semanas, quincenas, meses, bimestres, etc., entre 12 para sacar la cantidad de años y como resultado
            te dio infinitos decimales, incluye unicamente 10 para que tu resultado sea mas optimo.
            <br><br><button class="btn btn-success" type="submit">Obtener resultados</button>
        </form>

        <?php



        if (!empty($_POST['intereses']) && !empty($_POST['capital']) && !empty($_POST['tiempo'])) {

            echo "<br><br>";
            $intereses = $_POST['intereses'];
            $capital = $_POST['capital'];
            $tiempo_duracion_credito = $_POST['tiempo']; // el periodo es igual a n en la formula correspondiente

            $multiplicacion = $capital * $tiempo_duracion_credito;

            $resultado = $intereses / $multiplicacion;
            $tasa_anual = $resultado * 100; // lo pasamos a notacion matematica

            $tasa_anualrespuesta = number_format($tasa_anual, 1);
            '<div class="container">';
            echo "<h2 style='color:#FF0000'>La tasa de interes anual es: $tasa_anualrespuesta %<h2>";
        }
        ?>

</body>
</div>

</html>