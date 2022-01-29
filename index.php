<!DOCTYPE html>
<html>
<head>
    <title>Formulario email</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
        <input type="texto" placeholder="nombre" name="name" require="">
        <input type="email" placeholder="email" name="email" require="">
        <input type="texto" placeholder="asunto" name="asunto" require="">
        <textarea placeholder="mensaje" name="msj"></textarea>
        <input type="submit" name="enviar">
    </form>
    <?php
        include("correo.php");
    ?>
</body>
</html>