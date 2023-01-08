<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP</title>
    <link rel="stylesheet" href="./estilo-index.css">

</head>
<body>
    <h1> Mi pagina web</h1>

    <?php
    $titulo ='Programador web Inicial';
    $unidades_curso = 6;
    $precio = 4.599;
    $fecha = '10/06/2022';

    $titulo2 = 'Programador web Avanzado';
    $unidades_curso2 = 6;
    $precio2 = 5.799;
    $fecha2 = '10/12/2022'
     
?>    

<h3> Subtitulo</h3>
<section class="menu">
    <div class="alumno">
        <h2><?php echo $titulo ?> </h2>
        <ul>
            <li> Duración: <?php echo $unidades_curso ?></li>
            <li> Precio: <?php echo $precio ?></li>
            <li> Fecha: <?php echo $fecha ?></li>
        </ul>
    </div> 
    <div class="alumno">
        <h2><?php echo $titulo2 ?> </h2>
        <ul>
            <li> Duración: <?php echo $unidades_curso2 ?></li>
            <li> Precio: <?php echo $precio2 ?></li>
            <li> Fecha: <?php echo $fecha2 ?></li>
        </ul>
    </div>
</section>
</body>
</html>