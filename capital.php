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
                <h2>Obtener el capital C = M - I</h2>
                <h3>C = capital</h3>
                <h3>M = monto</h3>
                <h3>I = interes</h3>
                <hr class="my-2">
                <p>Ingrese los datos</p>
            </div>
        </div>
        <form action="capital.php" method="post">
            <br>
            <br><strong>Monto:</strong><br>
            <input type="number" step="any" name="monto" value="" class="col-sm-2 col-form-label" placeholder="Ingrese el monto" required></br>
            <br><strong>Intereses:</strong><br>
            <input type="number" step="any" name="interes" value="" class="col-sm-2 col-form-label" placeholder="Ingrese el interes" id="" required><br>
            <br><br><button type="submit" class="btn btn-success">Obtener monto</button>
        </form>
    </div>
    <?php
    if (!empty($_POST['monto']) && !empty($_POST['interes'])) {

        echo "<br><br>";
        $capital = 0;
        $monto = $_POST['monto'];
        $interes = $_POST['interes'];
        $capital = $monto - $interes;

        $numeroFormateado = number_format($capital, 2);
        ?>
        <div class="container">
        <?php 
        echo "<h2 style='color:#FF0000'>El capital total en quetzales es de: Q$numeroFormateado<h2>";
    }
    ?>
</body>
</div>

</html>