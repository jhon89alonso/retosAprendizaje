<?php

$nombre = ($_POST['nombre']);

$edad = ($_POST['edad']);

$añoAnterior = $edad-1;

$nuevoAño = $edad+1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>Reto 7</title>
</head>
<body>
    <div class="container">
        <h1>Reto 7</h1>
    </div>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="nombre">Ingresa tu nombre</label>
                <input type="text" name="nombre" id="">
            </div>

            <div class="form-group">
                <label for="nombre">Ingresa tu edad actual</label>
                <input type="number" name="edad" id="">
            </div>
            
            <div class="form-group">
                <input type="submit" value="Aceptar">
            </div>
        </form>
    </div>
    <div class="container">
        <h6><?php echo 'Hola '.$nombre.' la edad que tenias el año pasado era '. $añoAnterior. ' Y la del proximo año sera '.$nuevoAño;  ?></h6>
    </div>
</body>
</html>