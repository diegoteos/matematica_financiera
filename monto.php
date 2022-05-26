<?php
include 'menu/menu-general.php';
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
        <div class="p-5 bg-light">
            <div class="container">
                <h1 style='color:red'>Interes simple</h1>
                <h2>Obtener el monto M = C + I</h2>
                <h3>M = monto</h3>
                <h3>C = capital</h3>
                <h3>I = interes</h3>
                <hr class="my-2">
                <p>Ingrese los datos</p>
            </div>
        </div>
        <form action="monto.php" method="post">
            <br><br><strong>Capital:</strong><br>
            <input type="number" step="any" name="capital" value="" class="col-sm-2 col-form-label" placeholder="Ingrese el capital" required><br />
            <br><strong>Intereses:</strong><br>
            <input type="number" name="interes" value="" placeholder="Ingrese el interes" class="col-sm-2 col-form-label" id="" required><br>
            <br><br><button type="submit" class="btn btn-success">Obtener monto</button>
        </form>
    </div>


    <?php
    if (!empty($_POST['capital']) && !empty($_POST['interes'])) {

        echo "<br><br>";
        $monto = 0;
        $capital = $_POST['capital'];
        $interes = $_POST['interes'];
        $monto = $capital + $interes;

        $numeroFormateado = number_format($monto, 2);
        ?>
        <div class="container">
        <?php 
        echo "<h2 style='color:#FF0000'>El monto total en quetzales es de: Q$numeroFormateado<h1>";
    }
    ?>

</body>

</html>