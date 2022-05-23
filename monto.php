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

    <h2>Obtener el monto M = C + I</h2>
    <h3>M = monto</h3>
    <h3>C = capital</h3>
    <h3>I = interes</h3>

    <form action="monto.php" method="post">
        <br><br>Monto = <input type="number" step="any" name="capital" value="" placeholder="Capital" required> + <input type="number" name="interes" value="" placeholder="Interes" id="" required><br><br>
        <br><br><button type="submit">Obtener monto</button>
    </form>
</body>

</html>

<?php
if (!empty($_POST['capital']) && !empty($_POST['interes'])) {

    echo "<br><br>";
    $monto = 0;
    $capital = $_POST['capital'];
    $interes = $_POST['interes'];
    $monto = $capital + $interes;

    $numeroFormateado = number_format($monto, 2);
    echo "<h2>El monto total en quetzales es de:<h2>" . "<h1>Q$numeroFormateado<h1>";
}
?>