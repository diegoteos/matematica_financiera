<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interes compuesto</title>
</head>

<body>
<h1>Interes compuesto</h1>



        <h2>Obtener el monto M = C + I</h2>
        <form action="monto2.php" method="post">
            <br><br>Monto = <input type="number" step="any" name="capital1" value="" placeholder="Capital""> + <input type="number" name="interes1" value="" placeholder="Interes" id="" required<br><br>
            <br><br><button type="submit">Obtener monto</button>
        </form>
</body>

</html>

<?php
if (!empty($_POST['capital1'])) {

    echo "<br><br>";
    $monto = 0;
    $capital1 = $_POST['capital1'];
    $interes1 = $_POST['interes1'];
    $resultado = $capital1 + $interes1;

    $numeroFormateado = number_format($resultado, 2);
    echo "<h2>El monto total en quetzales es de:<h2>" . "<h1>Q$numeroFormateado<h1>";
}





?>