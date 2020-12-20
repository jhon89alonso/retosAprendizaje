<?php

/**
 * Instrucciones: añadiendo un extra al reto anterior ahora el usuario ingresará 3 números, sumarás los 2 primeros y el resultado será 
 * multiplicado por el tercero. Añade las consideraciones del punto decimal del reto anterior.
 */
$uno = ($_POST['uno']);

$dos = ($_POST['dos']);

$tres = ($_POST['tres']);

$operacion = ($uno + $dos)* $tres;

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
    <title>Reto 5</title>
</head>

<body>

<div class="container">
        <h1>Reto N&uacute;mero 5</h1>
    </div>

    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Ingresa tu primer n&uacute;mero</label>
                <input type="number" class="form-control" name="uno" id="uno" placeholder="Ingresa">
            </div>
    
            <div class="form-group">
                <label for="">Ingresa tu segundo n&uacute;mero</label>
                <input type="number" class="form-control" name="dos" id="dos" placeholder="Ingresa">
            </div>

            <div class="form-group">
                <label for="">Ingresa tu tercer n&uacute;mero</label>
                <input type="number" class="form-control" name="tres" id="tres" placeholder="Ingresa">
            </div>

            <input type="submit" class="btn btn-primary" value="Aceptar">
        </form>
    </div>

    <div class="container">
        <h4> <?php echo "El resultado es: ".$operacion; ?> </h4>
    </div>


</body>

</html>