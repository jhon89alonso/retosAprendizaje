<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 3</title>
</head>
<body>

<?php
    
    $categorias = ['Desarrollo e Ingenieria','Diseño y UX', 'Marketing','Negocios y emprendimiento','Producción Audiovisual','Crecimiento Profesional'];
    foreach($categorias as $categoria)
    {
        print_r($categoria);
        print_r('<br>');
    }
?>
    
    
</body>
</html>