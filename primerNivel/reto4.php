<?php

$uno = ($_POST['uno']);

$dos = ($_POST['dos']);

print_r("la suma de los valores ingresados es: ".($uno+$dos));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 4</title>
</head>
<body>

    <div class="container">
        <h1>Reto N&uacute;mero</h1>
    </div>

    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Ingresa tu primer n&uacute;mero</label>
                <input type="number" name="uno" id="uno" placeholder="Ingresa">
            </div>
    
            <div class="form-group">
                <label for="">Ingresa tu segundo n&uacute;mero</label>
                <input type="number" name="dos" id="dos" placeholder="Ingresa">
            </div>

            <input type="submit" class="btn btn-primary" value="Aceptar">
        </form>
    </div>
    
</body>
</html>

