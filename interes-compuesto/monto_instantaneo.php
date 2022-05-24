<?php
include 'estilo.php';
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
        <form action="monto_instantaneo.php" method="post">
            <h1>instantaneo: M = C e^(ni)</h1>
           <strong>Capital:</strong><br>
            <input type="number" step="any" name="capital" value="" placeholder="Ingrese el capital" id="" required><br><br>
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
    echo "<h2>El monto es de:<h2>";
    echo "<h1>Q$numeroFormateado<h1>";

    $totalInteres = $resultado - $capital;
    $numeroFormateado = number_format($totalInteres, 2);
    echo '<br>';
    echo "<h4>El interes generado es de:<h4>";
    echo "<h2>Q$numeroFormateado<h2>";
}
?>


