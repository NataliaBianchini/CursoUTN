<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <enlace href="https: //fonts.googleapis.com/css2? family= Oswald:wght@200;300;400;500;600 & family= Teko:wght@300;500;600 & display=swap" rel="hoja de estilo"></enlace>
    <link rel="stylesheet" href="./estilos_integradorfinal.css">
    <link rel="stylesheet" href="./css/lightbox.min.css">
    <title>Integrador Final</title>
</head>
<body>
    <header class="header">
        <div class="logo-de-marca"></div>
        <ul class="menu">
                <li> <a href="productos.php"> Productos </a></li>
                <li> <a href="contacto.php"> Contacto </a></li>
                <li> <a href="informacion.php"> Info </a></li>
        </ul>
    </header>

    <section class="productos">
        <div>
            <a href="./img_integrador_final/producto1.jpg" data-lightbox="roadtrip"><img src="./img_integrador_final/producto1.jpg" alt="Shampoo"></a>
        </div>
        <div>
            <a href="./img_integrador_final/producto2.jpg" data-lightbox="roadtrip"><img src="./img_integrador_final/producto2.jpg" alt="Acondicionador"></a>
        </div>
        <div>
            <a href="./img_integrador_final/producto3.jpg" data-lightbox="roadtrip"><img src="./img_integrador_final/producto3.jpg" alt="Combo"></a>
        </div>
    </section>

    <section class="contenido"><p><h3>Ofrecemos cosmética sustentable, nuestros productos son artesanales.</br>
        Hechos a base de ingredientes naturales, cuentan con las propiedades de los aceites esenciales.</br> 
        Contamos con variedad para los diferentes tipos de piel y cabello, podes consultarnos dejándonos un mensaje.</h3></p>


    </section>
    <?php include "footer.php" ?>

    <script src="./js/lightbox.min.js"></script>
    <script src="./js/lightbox-plus-jquery.min.js"></script>
</body>
</html>