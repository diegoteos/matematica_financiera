<?php
include '../menu/menu-simple.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interes simple: tiempo</title>
</head>

<body>
    <div class="container">
        <div class="p-5 bg-light">
            <div class="container">
                <h1 style='color:red'>Interes simple:</h1>
                <h3>Formula para obtener el tiempo del prestamo:</h3>
                <h3>n = I / (C i)</h3>
                <hr class="my-2">
                <p>Ingrese los datos</p>
            </div>
        </div>
        <form action="tiempo.php" method="post">
            <br><strong>Total intereses generados:</strong><br>
            <input type="number" step="any" name="intereses" value="" class="col-sm-2 col-form-label" placeholder="Ingrese los intereses" id="" required><br>
            <br><strong>Capital: </strong><br><input type="number" step="any" name="capital" value="" class="col-sm-2 col-form-label" placeholder="Ingrese el capital:" id="" required><br>
            <br><strong>Tasa de interes anual % </strong><br><input type="number" step="any" name="interes" value="" class="col-sm-2 col-form-label" placeholder="Tasa de interes anual en formato %" id="" required><br>
            <br><br><button class="btn btn-success" type="submit">Obtener resultados</button>
        </form>

        <?php



        if (!empty($_POST['intereses']) && !empty($_POST['capital']) && !empty($_POST['interes'])) {

            echo "<br><br>";
            $intereses = $_POST['intereses'];
            $capital = $_POST['capital'];
            $interes = $_POST['interes'];

            $tasa_anual = $interes / 100;

            $multi = $capital * $tasa_anual;
            $igual = $intereses / $multi;
            $total_años = intval($igual);  // pasamos a enteros el resultado para extraer la cantidad de años
            $meses = $igual - $total_años; // obtenemos el resto lo que respecta a los meses
            $meses = number_format($meses, 5); // dejamos los decimales de meses en 5 decimales
            $total_meses1 = 12 * $meses; // multiplicamos por 12 para determinar la cantidad de meses
            $total_meses2 = intval($total_meses1); // pasamos los meses a enteros
            $dias1 = $total_meses1 - $total_meses2; // obtenemos el restante para sacar el numero de dias
            $dias2 = $dias1 * 30; // multiplicamos el restante por la cantidad de dias al mes
            $dias2 = intval($dias2); //pasamos a enteros el valor de dias
            '<div class="container">';
            echo "<h3 style='color:#FF0000'>El tiempo consiste en: $total_años años, $total_meses2 meses y $dias2 dias aproximadamente</h3>";
        }
        ?>


</body>
</div>

</html>