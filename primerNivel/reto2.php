<?php

/**
 * Instrucciones: este es un clásico de clásicos, pero haremos un pequeño cambio. En lugar de solo imprimir un mensaje en pantalla, pedirás al   * usuario que digite un nombre y mostrarás en pantalla lo siguiente: Hola, [nombre]
 */
$nombre = ($_POST['nombre']);

$apellido = ($_POST['apellido']);
print_r("Hola ".$nombre.' '. $apellido)  ;
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
    <title>Reto1</title>
</head>

<body>

<header>
    <div class="container">
        <h1> Reto 2</h1>
    </div>
</header>
    <div class="container">

        <form action="" method="POST">
            <div class="form-group">
                <label for="nombre">Ingresa tu nombre</label>
                <input type="text" value="" name="nombre">
            </div>
            
            <div class="form-group">
                <label for="nombre">Ingresa tu apellido</label>
                <input type="text" value="" name="apellido">
            </div>
            <input type="submit" class="btn btn-primary" value="Ingresar">
        </form>
    </div>



</body>

</html>