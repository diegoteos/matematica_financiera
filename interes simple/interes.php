<?php
include '../estilos/cabecera.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interes simple: Interes</title>
</head>

<body>
    <div class="container">
        <form action="interes.php" method="post">
            <h2>Formula para obtener el interes:</h2> 
            <h2>I = C n i</h2>
            <br><strong>Capital:</strong><br>
            <input type="number" step="any" name="capital" value="" placeholder="Ingrese el capital" id="" required><br><br>
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



if (!empty($_POST['interes']) && !empty($_POST['capital']) && !empty($_POST['tiempo'])) {

    echo "<br><br>";
    $interes = $_POST['interes'];
    $capital = $_POST['capital'];
    $tiempo_duracion_credito = $_POST['tiempo']; // el periodo es igual a n en la formula correspondiente
    $tasa_anual = $interes / 100; //convertimos a notacion matematica el interes
    //echo "el capital es de $capital el tiempo es $tiempo_duracion_credito y el interes"
    $resultado  = $capital * $tiempo_duracion_credito * $tasa_anual; 

    $numeroFormateado = number_format($resultado, 2);
    echo "<h2>Los intereses son de: Q$numeroFormateado <h2>";


}
?>
