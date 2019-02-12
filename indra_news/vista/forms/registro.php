<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <!--<meta http-equiv="Content-type" content="text/html">-->
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>Registro de Usuarios</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" crossorigin="anonymous">
    </head>
    <body>
        <!-- Formulario para ingreso de información -->
        <center><h1>Registro de Usuarios</h1></center>
            <center><form method="POST" action="../../modelo/createUser.php">
                <table width="50%" border="1" cellpadding="5" cellspacing="2" style="vertical-align: middle">
                    <tr><td>Indique su Nombre de Usuario: </td><td><input type="text" name="nombre_usuario" placeholder="Ingresa el Usuario" style="width:500px;height:25px"><br><br></td></tr>
                    <tr><td>Digite la Contraseña: </td><td><input type="password" name="contrasena" placeholder="Ingresa la Contraseña" style="width:500px;height:25px"><br><br></td></tr>
                    <tr><td>Digite Nuevamente la Contraseña: </td><td><input type="password" name="contrasena2" placeholder="Ingresa Nuevamente la Contraseña" style="width:500px;height:25px"><br><br></td></tr>
                </table>
                <br>    
                <center><button>Crear Usuario</button></center>
            </form></center>
    </body>
</html>
<?php
    echo '<br><center><button class="btn"><a href="../login.php">Volver</a></button></center>';
?>