<?php

$dias = ($_POST['dias']);

$horas = $dias*24;

$minutos = $horas*60;

$segundos =$minutos*60;


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
    <title>Reto 9</title>
</head>

<body>

    <div class="container">
        <h1 class="text-rigth">
            Reto 9
        </h1>
    </div>

    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="">¿Ingresa el numero de dias?</label>
                <input type="number" name="dias" id="dias" class="form-control">
            </div>
                       
            <div class="container" s style="padding-top:1em;" >
                <input type="submit" value="Aceptar" class="btn btn-primary" >
            </div>
        </form>
    </div>
    
    <div class="container" style="padding-top: 1em;">
        <h6><?php echo 'El total de los '.$dias.' dias, sus horas son :'.$horas.' y sus minutos son: '.$minutos.' y el total de sus segundos son: '.$segundos; ?></h6>
    </div>

</body>

</html>