<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<?php

include "conexion.php";

mysqli_query($conexion, "insert into usuarios(nombre,apellido,cc,correo,rol,contrasena) values 
('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[cc]','$_REQUEST[correo]','$_REQUEST[rol]','$_REQUEST[contrasena]')")
or die("Problemas en el select" . mysqli_error($conexion));

mysqli_close($conexion);

    echo "registro terminado"

    ?>
<form action="inicio.html" method="post">
    <input type="submit" value="regresar">
</form>
</body>
</html>