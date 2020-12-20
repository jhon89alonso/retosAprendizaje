<?php 

$pizza = ($_POST['pizzas']); 
$rebanada = ($_POST['rebanadas']); 
$consumo = $pizza-$rebanada;  

if($pizza = 0){
    $mensaje = "No importa, llamemos un domicilio";
}elseif($consumo > 0){
    $mensaje = "Quedan ". $consumo. " rebanadas";
}else{
    $mensaje = "Las cuentas no dan, vuelve a ingresar los datos";
}

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
    <title>Reto 6</title>
</head>

<body>
    <div class="container">
        <div class="container">
            <form action="" method="post">
                <div class="form-group">
                    <label for="pizzas">¿Cuantas rebanadas de Pizza trajiste?</label>
                    <input id="pizzas" name="pizzas" class="form-control" type="text">
                </div> 

                <div class="form-group">
                    <label for="rebanadas">¿Cuantas rebanadas han comido?</label>
                    <input id="rebanadas" name="rebanadas" class="form-control" type="text">
                </div> 

                <input type="submit" class="btn btn-primary" value="Aceptar">
            </form>
        </div>
        <div class="container">
            
            <h5><?php echo $mensaje; ?></h5>
        </div>
    </div>

</body>

</html>