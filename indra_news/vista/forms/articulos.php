<?php session_start();?>
<!-- Formulario para inclusión de artículos -->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <!--<meta http-equiv="Content-type" content="text/html">-->
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>Crear Artículos o Noticias</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" crossorigin="anonymous">
    </head>
    <body>
    <!-- Formulario para ingreso de información -->
    <center><h1>Crear Nuevo Artículo o Noticia</h1></center>
        <center><form method="POST" enctype="multipart/form-data" action="../../modelo/createNews.php">
                        <table width="30%" border="1" cellpadding="5" cellspacing="2" style="vertical-align: middle">
                            <tr><td>Categoria: </td><td><input type="text" name="categoria" style="width:1000px;height:25px"><br><br></td></tr>
                            <tr><td>Título: </td><td><input type="text" name="titulo" style="width:1000px;height:25px"><br><br></td></tr>
                            <tr><td>Autor: </td><td><input type="text" name="autor" style="width:1000px;height:25px"><br><br></td></tr>
                            <tr><td>Foto: </td><td><input name="foto" type="file" id="foto"><br><br></td></tr>
                            <tr><td>Cargo: </td><td><input type="text" name="cargo" style="width:1000px;height:25px"><br><br></td></tr>
                            <tr><td>Contenido: </td><td><textarea name="contenido" rows="5" placeholder="Inserta acá el texto de tu artículo o noticia..." style="width:1000px;height:200px"></textarea><br><br></td></tr>
                            <tr><td>Imagen: </td><td><input name="imagen" type="file" id="imagen"><br><br></td></tr>                 
                            <tr><td>Fecha de Publicación: </td><td><input type="text" name="fecha_publicacion" placeholder="AAAA-MM-DD" style="width:500px;height:25px"><br><br></td></tr>
                            <tr><td>Fecha de Caducidad: </td><td><input type="text" name="fecha_caducidad" placeholder="AAAA-MM-DD" style="width:500px;height:25px"><br><br></td></tr>
                            <tr><td>País: </td><td><input type="text" name="pais" style="width:500px;height:25px"><br><br></td></tr>
                            <tr><td>Sede: </td><td><input type="text" name="sede" style="width:500px;height:25px"><br><br></td></tr>                
                        </table>
                        <br>
                        <center><button class="btn">Publicar</button></center>
                </form>
        </center>
    </body>
</html>