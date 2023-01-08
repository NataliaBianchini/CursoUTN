<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos_control.css">
    <title>Nosotros</title>
</head>
<body>
    <section>
    <div class="btn_nosotros">
    <ul>
            <li> <a href="nosotros.php?nom=jp">Juan Pérez</a></li>
            <li> <a href="nosotros.php?nom=cf">Cosme Fulanito</a></li>
            <li> <a href="nosotros.php?nom=ng">Natalia Gómez</a></li>
    </ul>
    </div>

    <?php
    if (isset ($_GET["nom"])){
    switch ($_GET["nom"]){
        case 'jp': 
            $nombre= "Juan Pérez";
            $cargo= "CEO";
            $info= "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit similique sint laboriosam nulla et voluptate quam magnam saepe quibusdam quas dolores dignissimos error vitae doloremque excepturi fugit, aliquid velit nobis?";
            $img= "./imagenes responsive/celular.png";
            break;

        case'cf': 
            $nombre= "Cosme Fulanito";
            $cargo= "Recursos Humanos";
            $info= "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit similique sint laboriosam nulla et voluptate quam magnam saepe quibusdam quas dolores dignissimos error vitae doloremque excepturi fugit, aliquid velit nobis?";
            $img= "./imagenes responsive/celular.png";
            break;

        case'ng': 
            $nombre= "Natalia Gómez";
            $cargo= "Ventas";
            $info= "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit similique sint laboriosam nulla et voluptate quam magnam saepe quibusdam quas dolores dignissimos error vitae doloremque excepturi fugit, aliquid velit nobis?";
            $img= "./imagenes responsive/celular.png";
            break;
    }}
    else echo "Otra cosa"
    ?>
    <div class="info_nosotros">
        <?php echo $nombre; ?>
        <h4> <?php echo $cargo; ?></h4>
        <p> <?php echo $info; ?></p>
        <div class="contenedor_img">
        <img src="<?php echo $img;?>" alt=""></div>
    </div> 



    </section>
    
</body>
</html>