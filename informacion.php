<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_integradorfinal.css">
    <title>Informacion</title>
</head>
<body>
<section>
    <div class="btn_info">
    <ul>
        <li> <a href="informacion.php?nom=cf">Cruelty free</a></li>
        <li> <a href="informacion.php?nom=sp">Sin parabenos</a></li>
        <li> <a href="informacion.php?nom=ef">Eco friendly</a></li>
        <li> <a href="informacion.php?nom=av">Apto vegano</a></li>
    </ul>
    </div>
<?php
    if (isset ($_GET["nom"])){
    switch ($_GET["nom"]){
        case 'cf': 
            $nombre = 'Cruelty free';
            $info = 'Nuestros productos no son testeados en animales.';
            $img = './img_integrador_final/crueltyfreelogo.png';
            break;
        case 'sp': 
            $nombre = 'Sin parabenos';
            $info = 'Los parabenos son conservantes químicos que pueden ser dañinos para la piel. Los cosmeticos libres de parabenos son mejor aceptados por el cuerpo y además beneficiosos para el medio ambiente.';
            $img = './img_integrador_final/sinparabenos.png';
            break;
        case 'ef': 
            $nombre = 'Eco friendly';
            $info = 'Son productos sustentables, no contienen sustancias tóxicas o irritantes y tanto su fabricación como su uso, resultan respetuosos con el medio ambiente.';
            $img = './img_integrador_final/ecofriendlylogo.png';
            break;
        case 'av': 
            $nombre = 'Apto vegano';
            $info = 'Los productos no contienen ingredientes de origen animal, ni sus derivados.';
            $img = './img_integrador_final/veganlogo.png';
            break;  
    }}   
    ?>
    <div class="info">
        <h2><?php echo $nombre; ?></h2>
        <p><?php echo $info; ?></p>
        <div>
        <img class="contenedor_img" src="<?php echo $img; ?>" alt=""></div>
    </div>

</section>
<?php include 'footer.php' ?>

    
</body>
</html>