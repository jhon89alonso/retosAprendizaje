<?php

$cuenta = ($_POST['cuenta']);

$porcentaje = ($_POST['porcentaje']);

$impuestos = ($_POST['impuestos']);

$personas = ($_POST['personas']);

$operacion1 = $cuenta*($porcentaje/100);

$operacion2 = $cuenta*($impuestos/100);

$operacion3 =($cuenta+$operacion1+$operacion2)/$personas;


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
    <title>Reto 8</title>
</head>

<body style="background-color: aquamarine;">

    <div class="container">
        <h1 class="text-center">
            Reto 8
        </h1>
    </div>

    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="">¿Ingresa la cuenta a pagar?</label>
                <input type="text" name="cuenta" id="cuenta" class="form-control">
            </div>
            <div class="form-group">
                <label for="">¿Cual es el porcentaje de propina que van a dejar?</label>
                <input type="number" name="porcentaje" id="porcentaje" class="form-control">
            </div>
            <div class="form-group">
                <label for="">¿Valor de impuestos?</label>
                <input type="text" name="impuestos" id="impuestos" class="form-control">
            </div>

            <div class="form-group">
                <label for="">¿Cuantas personas hay?</label>
                <input type="number" name="personas" id="personas" class="form-control">
            </div>
            
            <div class="container" s style="padding-top:1em;" >
                <input type="submit" value="Aceptar" class="btn btn-secondary" >
            </div>
        </form>
    </div>
    
    <div class="container" style="padding-top: 1em;">
        <h6><?php echo 'El total a pagar por persona es de $'.$operacion3; ?></h6>
    </div>

</body>

</html>