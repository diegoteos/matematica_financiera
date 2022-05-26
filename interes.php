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
                <h2>Obtener el interes, formula: I = M - C</h2>
                <h3>I = interes</h3>
                <h3>C = capital</h3>
                <h3>M = monto</h3>
                <hr class="my-2">
                <p>Ingrese los datos</p>
            </div>
        </div>

        <form action="interes.php" method="post">
            <br><br><strong>Monto:</strong><br>
            <input type="number" step="any" name="monto" value="" class="col-sm-2 col-form-label" placeholder="Ingrese el monto" required><br />
            <br><strong>Capital:</strong><br>
            <input type="number" step="any" name="capital" value="" class="col-sm-2 col-form-label" placeholder="Ingrese el capital" id="" required><br>
            <br><br><button type="submit" class="btn btn-success">Obtener monto</button>
        </form>

    </div>
    <?php
    if (!empty($_POST['monto']) && !empty($_POST['capital'])) {

        echo "<br><br>";
        $interes = 0;
        $monto = $_POST['monto'];
        $capital = $_POST['capital'];
        $interes = $monto - $capital;

        $numeroFormateado = number_format($interes, 2);
        ?>
        <div class="container">
            <?php 
        echo "<h2 style='color:#FF0000'>El interes total en quetzales es de: Q$numeroFormateado<h2>";
    }
    ?>
</div>
</body>

</html>