<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos_integradorfinal.css">
    <title>Contacto</title>
</head>
<body class="contacto">
    <h1>Contacto</h1>

    <form action="enviar_consulta.php" method="POST" class="formulario">
        <input type="text" name="nombre" id="nombre"
        class="contacto_imput" placeholder="Nombre">
        <input type="text" name="apellido" id="apellido"
        class="contacto_imput" placeholder="Apellido">
        <input type="text" name="email" id="email"
        class="contacto_imput" placeholder="Ingresa tu correo electrónico">
        <textarea name="mensaje" id="mensaje" cols="30" rows="10" class="contacto_imput"></textarea>
        <input type= "submit" value="Enviar" class="contacto_btn">
        

    </form>
    <?php 
    if (isset ($_GET['e'])){
        echo "<h3> Mensaje enviado con éxito </h3>";
    }
    ?>
    <?php include "footer.php" ?>
</body>
</html>