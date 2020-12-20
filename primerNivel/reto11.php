<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>Reto 11</title>
</head>

<body>

    <div class="container">
        <h1 class="text-rigth">
            Reto 11
        </h1>
    </div>

    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="">¿Ingresa un n&uacute;mero mayor a 1000?</label>
                <input type="number" name="uno" id="uno" class="form-control">
            </div>

            <div class="form-group">
                <label for="">¿Ingresa un n&uacute;mero menor a 100?</label>
                <input type="number" name="dos" id="dos" class="form-control">
            </div>
            <div class="container" s style="padding-top:1em;">
                <input type="submit" value="Aceptar" class="btn btn-primary">
            </div>
        </form>
    </div>

    <?php

    $uno = ($_POST['uno']);

    $dos = ($_POST['dos']);

    $posibilidad = $uno / $dos;


    ?>

    <div class="container" style="padding-top: 1em;">
        <h6><?php echo 'El total de las veces que el numero ' . $dos . ' ingresa en  :' . $uno . ' es ' . $posibilidad ; ?></h6>
    </div>

</body>

</html>