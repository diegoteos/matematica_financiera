<?php
include 'estilo.php';
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
    <div class="container">
        <form action="monto.php" method="post">
        <strong>Capital:</strong><br><input type="number" step="any" name="capital" value="" placeholder="Ingrese el capital" id="" required><br><br>
            <br><strong>Interes anual % </strong><br><input type="number" step="any" name="interes" value="" placeholder="Interes en formato %" id="" required><br><br>
            <br><strong>Periodos anuales (P):</strong><br><input type="number" name="periodos" value="" placeholder="Ingrese el valor de P" id="" required><br><br>
            <br><strong>Tiempo (años):</strong><br><input type="number" step="any" name="tiempos" value="" placeholder="Duracion credito en años" id="" required><br><br>
            Si dividiste una cantidad de semanas, quincenas, meses, bimestres, etc., entre 12 para sacar la cantidad de años y como resultado
            te dio infinitos decimales, incluye unicamente 10 para que tu resultado sea mas optimo.
            <br><br><button type="submit">Obtener resultados</button>
        </form>
    </div>
</body>

</html>

<?php
if (!empty($_POST['capital']) && !empty($_POST['interes']) && !empty($_POST['periodos']) && !empty($_POST['tiempos'])) {

    echo "<br><br>";
    $monto = 0;
    $capital = $_POST['capital'];
    $interes = $_POST['interes'];
    $periodos_al_año = $_POST['periodos']; // el periodo anual es lo que corresponde a p en la formula correspondiente
    $tiempo_duracion_credito = $_POST['tiempos']; // el periodo es igual a n en la formula correspondiente

    /*
    echo "VERIFICAMOS LA RECEPCION DE LOS DATOS:";
    echo "<br/> capital: " . $capital;
    echo "<br/> interes: " . $interes;
    echo "<br/> duracion credito: " . $periodos_al_año;
    echo "<br/> tiempos: " . $tiempo_duracion_credito;

    echo "<br><br>";
    echo "<br/> EMPEZAMOS A OPERAR:";
*/
    $tasa_anual = $interes / 100; // lo pasamos a notacion matematica
    //echo "<br/> Esta es la tasa de interes anual: " . $tasa_anual;
    //echo "<br> Este es el resultado de la division de la tasa de interes con periodo capitalizable anualmente";

    $division = $tasa_anual / $periodos_al_año;
    $nporp = $tiempo_duracion_credito * $periodos_al_año;

    $parentesis = 1 + $division;
    $parentesis_final = $parentesis ** $nporp;
    $resultado = $parentesis_final * $capital;

    $numeroFormateado = number_format($resultado, 2);
    echo "<h2>El monto total en quetzales es de:<h2>";
    echo "<h1>Q$numeroFormateado<h1>";
}





?>