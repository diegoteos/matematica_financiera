<?php
include 'estilos/cabecera.php';
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

    <h2>Obtener el interes, formula: I = M - C</h2>
    <h3>I = interes</h3>
    <h3>C = capital</h3>
    <h3>M = monto</h3>

    <form action="interes.php" method="post">
        <br><br>Capital = <input type="number" step="any" name="monto" value="" placeholder="Ingrese el monto" required> - <input type="number" step="any" name="capital" value="" placeholder="Ingrese el capital" id="" required><br><br>
        <br><br><button type="submit">Obtener monto</button>
    </form>
</body>

</html>
<?php
if (!empty($_POST['monto']) && !empty($_POST['capital'])) {

    echo "<br><br>";
    $interes = 0;
    $monto = $_POST['monto'];
    $capital = $_POST['capital'];
    $interes = $monto - $capital;

    $numeroFormateado = number_format($interes, 2);
    echo "<h2>El interes total en quetzales es de:<h2>" . "<h1>Q$numeroFormateado<h1>";
}
?>