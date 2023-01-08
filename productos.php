<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_integradorfinal.css">
    <title>Productos</title>
</head>
<body>
<?php
    $titulo ='Shampoo sólido';
    $precio = 500;
    $duracion = '70 lavados aproximadamente';

    $titulo2 = 'Acondicionador sólido';
    $precio2 = 520;
    $duracion2 = '70 lavados aproximadamente';

    $titulo3 = 'Combo Shampoo y acondicionador con jabonera de regalo';
    $precio_combo = $precio + $precio2;
     

?> 

<section class="precios">
    <div class="info_productos">
        <h2><?php echo $titulo ?> </h2>
        <ul>
            <li> Precio: <?php echo $precio ?></li>
            <li> Duracion: <?php echo $duracion ?></li>
        </ul>
    </div> 
    <div class="info_productos">
        <h2><?php echo $titulo2 ?> </h2>
        <ul>
            <li> Precio: <?php echo $precio2 ?></li>
            <li> Duracion: <?php echo $duracion2 ?></li>
        </ul>
    </div>
    <div class="info_productos">
        <h2><?php echo $titulo3 ?> </h2>
        <ul>
            <li> Precio: <?php echo $precio_combo ?></li>
        </ul>
    </div>
<?php include "footer.php" ?>
</body>
</html>