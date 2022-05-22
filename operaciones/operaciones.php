<?php

$monto = 0;
$interes = 17.8;
$capital = 575000;
$tiempo_duracion_credito = 4; // el periodo es igual a n en la formula correspondiente
$periodos_al_año = 12; // el periodo anual es lo que corresponde a p en la formula correspondiente

$tasa_anual = $interes / 100; // lo pasamos a notacion matematica

$nporp = $tiempo_duracion_credito * $periodos_al_año; //obtenemos el valor de la potencia


$parentesis = 1 + $tasa_anual / $periodos_al_año;

$parentesis_final = $parentesis ** $nporp;

$resultado = $parentesis_final * $capital;

$numeroFormateado = number_format($resultado, 2);

echo "<h2>El monto total en quetzales es de:<h2>";
echo "<h1>Q$numeroFormateado<h1>";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interes compuesto</title>
</head>

<body>
    <form action="interes_compuesto.php" method="post">
        <input type="number" step="any" name="capital" value="" placeholder="Ingrese el capital" id="">
        <input type="number" step="any" name="interes" value="" placeholder="Interes en formato %" id="">
        <input type="number" step="any" name="tiempos" value="" placeholder="Ingrese el valor de P" id="" required>
        <input type="number" name="periodos" value="" placeholder="Duracion credito en años" id="" required>
        <button type="submit">Obtener resultados</button>
    </form>
</body>

</html>
<?php
if ($_POST) {


    $monto = 0;
    $capital = $_POST['capital'];
    $interes = $_POST['interes'];
    $tiempo_duracion_credito = $_POST['tiempos']; // el periodo es igual a n en la formula correspondiente
    $periodos_al_año = $_POST['periodos']; // el periodo anual es lo que corresponde a p en la formula correspondiente

    echo "<br/> capital: " . $capital;
    echo "<br/> interes: " . $interes;
    echo "<br/> tiempos: " . $tiempo_duracion_credito;
    echo "<br/> duracion credito: " . $periodos_al_año;

    $tasa_anual = $interes / 100; // lo pasamos a notacion matematica


    $nporp = $tiempo_duracion_credito * $periodos_al_año; //obtenemos el valor de la potencia



    $division = $tasa_anual / 6;

    $parentesis = 1 + $division;


    $parentesis_final = $parentesis ** $nporp;



    $resultado = $parentesis_final * $capital;



    $numeroFormateado = number_format($resultado, 2);

    echo "<h2>El monto total en quetzales es de:<h2>";
    echo "<h1>Q$numeroFormateado<h1>";
}





?>