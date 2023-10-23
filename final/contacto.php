<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">



    <title>Document</title>
</head>
<body>
<div class="miusers-form">
        <h1>CREACION DE USUARIOS</h1>

        <form action="register.php" method="POST">
            <input type="text" placeholder="Nombre" name="nombre"> 
            <input type="text" placeholder="Apellido" name="apellido">
            <input type="email" placeholder="Email" name="email">
            <input type="text" placeholder="Contacto" name="contacto">
            <input type="text" placeholder="Observación" name="observacion">

            <input type="submit" value="Agregar">
        </form>
    </div>


    
</body>
</html>