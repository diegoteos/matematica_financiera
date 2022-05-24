<?php
include '../menu/menu-simple.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICC - Capital</title>
</head>

<body>
    <div class="container">
        <div class="p-5 bg-light">
            <div class="container">
                <h1>Formula para el interes compuesto</h1>
                <h1>capitalizable: C = M / ( 1 + i/p)^(np)</h1>
                <hr class="my-2">
                <p>Ingrese los datos</p>
            </div>
        </div>
        <form action="capital.php" method="post">
            <strong>Monto:</strong><br>
            <input type="number" step="any" name="monto" value="" placeholder="Ingrese el monto" id="" required><br><br>
            <strong>Interes anual % </strong><br><input type="number" step="any" name="interes" value="" placeholder="Interes anual en formato %" id="" required><br><br>
            <strong>Periodos anuales (P):</strong><br><input type="number" name="periodos" value="" placeholder="Ingrese el valor de P" id="" required><br><br>
            <strong>Tiempo (años):</strong><br><input type="number" step="any" name="tiempos" value="" placeholder="Duracion credito en años" id="" required><br><br>
            Si dividiste una cantidad de semanas, quincenas, meses, bimestres, etc., entre 12 para sacar la cantidad de años y como resultado
            te dio infinitos decimales, incluye unicamente 10 para que tu resultado sea mas optimo.
            <br><br><button type="submit">Obtener resultados</button>
        </form>
</body>
</div>

</html>

<?php
if (!empty($_POST['monto']) && !empty($_POST['interes']) && !empty($_POST['periodos']) && !empty($_POST['tiempos'])) {

    echo "<br><br>";
    $capital = 0;
    $monto = $_POST['monto'];
    $interes = $_POST['interes'];
    $periodos_al_año = $_POST['periodos']; // el periodo anual es lo que corresponde a p en la formula correspondiente
    $tiempo_duracion_credito = $_POST['tiempos']; // el periodo es igual a n en la formula correspondiente


    $tasa_anual = $interes / 100; // lo pasamos a notacion matematica   
    $division = $tasa_anual / $periodos_al_año;
    $nporp = $tiempo_duracion_credito * $periodos_al_año;
    $parentesis = 1 + $division;
    $parentesis_final = $parentesis ** $nporp;
    $resultado = $monto / $parentesis_final;


    $numeroFormateado = number_format($resultado, 2);
    echo "<h2>El capital es de:<h2>";
    echo "<h1>Q$numeroFormateado<h1>";

    '<br><br>';
    $interes2 = $monto - $resultado;
    $interesResultado = number_format($interes2, 2);
    echo "<br><h4>El interes resultante es de: <h4>Q" . $interesResultado;
}





?>