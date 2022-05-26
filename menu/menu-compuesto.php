<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="container">
    <hr class="my-2">
        <nav class=" navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" color="4" href="../index.php">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <strong style='color:black;'>Selecciona aquí el tipo de interes:</strong>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../capital.php">Formulas generales</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../interes-simple/capital.php">Interes simple</a></li>
                                <li><a class="dropdown-item" href="capital.php">Interes compuesto</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <nav class=" navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="navbar-brand" href="capital.php">Capital</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="monto.php">Monto</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="capital_instantaneo.php">Capital instantaneo</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="monto_instantaneo.php">Monto instantaneo</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <hr class="my-2">
    </div>
    <br><br>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>



<?php {
}

?>