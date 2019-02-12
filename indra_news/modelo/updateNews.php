<?php

    //Llamado de la conexión
    include_once '../controlador/conexion.php';    
    
    //Lectura de la base de datos y almacenamiento en array
    include_once 'reedNews.php';  

    IF($_GET){
        $id = filter_input(INPUT_GET, "id_articulo");
        $cat = filter_input(INPUT_GET, "categoria");
        $tit = filter_input(INPUT_GET, "titulo");
        $aut = filter_input(INPUT_GET, "autor");            
        $fot = filter_input(INPUT_GET, "foto");
        $car = filter_input(INPUT_GET, "cargo");    
        $con = filter_input(INPUT_GET, "contenido");   
        $img = filter_input(INPUT_GET, "imagen");    
        $fep = filter_input(INPUT_GET, "fecha_publicacion");
        $fec = filter_input(INPUT_GET, "fecha_caducidad");
        $pai = filter_input(INPUT_GET, "pais");
        $sed = filter_input(INPUT_GET, "sede");

        //Sentencia para captura de los datos según el id
        $sql_unico = 'SELECT * FROM articulos WHERE id_articulo=?';      
        $gsent_unico = $mbd->prepare($sql_unico);
        $gsent_unico->execute(array($id));
        $resultado_unico = $gsent_unico->fetch();     
    
        //Sentencia para editar la información en la base de datos
        $sql_editar = 'UPDATE articulos SET categoria=?, titulo=?, autor=?, foto=?, cargo=?, contenido=?, imagen=?, fecha_publicacion=?, fecha_caducidad=?, pais=?, sede=? WHERE id_articulo=?';
        $sentencia_editar = $mbd->prepare($sql_editar);
        $sentencia_editar->execute(array($cat,$tit,$aut,$fot,$car,$con,$img,$fep,$fec,$pai,$sed,$id));

        //Cerrar la conexión con la base de datos
        $sentencia_editar=NULL;
        $mbd = NULL;  
    }
?>
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

<title>Modificar Artículos o Noticias</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" crossorigin="anonymous">

</head>
    <body>
        <!-- Definición del formulario para inclusión de artículos -->
        <section id="blog">
             <div class="container">
                  <div class="row">            
                       <div class="col-md-offset-1 col-md-10 col-sm-12">
                           <center><h2>Editar Artículo o Noticia</h2>
                            <form method="GET" action="../modelo/updateNews.php" enctype="multipart/form-data">
                                <table width="30%" border="1" cellpadding="5" cellspacing="2" style="vertical-align: middle">
                                    <tr><td>Categoria: </td><td><input type="text" class="form-control" name="categoria" value="<?php echo $resultado_unico['categoria'] ?>" style="width:1000px;height:25px"><br><br></td></tr>
                                    <tr><td>Título: </td><td><input type="text" class="form-control" name="titulo" value="<?php echo $resultado_unico['titulo'] ?>" style="width:1000px;height:25px"><br><br></td></tr>
                                    <tr><td>Autor: </td><td><input type="text" class="form-control" name="autor" value="<?php echo $resultado_unico['autor'] ?>" style="width:1000px;height:25px"><br><br></td></tr>
                                    <tr><td>Foto: </td><td><input type="text" class="form-control" name="foto" value="<?php echo $resultado_unico['foto'] ?>" style="width:1000px;height:25px"><br><br></td></tr>
                                    <tr><td>Cargo: </td><td><input type="text" class="form-control" name="cargo" value="<?php echo $resultado_unico['cargo'] ?>" style="width:1000px;height:25px"><br><br></td></tr>
                                    <tr><td>Contenido: </td><td><input type="text" class="form-control" name="contenido" value="<?php echo $resultado_unico['contenido'] ?>" style="width:1000px;height:200px"><br><br></td></tr>
                                    <tr><td>Imagen: </td><td><input type="text" class="form-control" name="imagen" value="<?php echo $resultado_unico['imagen'] ?>" style="width:1000px;height:25px"><br><br></td></tr>
                                    <tr><td>Fecha de Publicación: </td><td><input type="text" class="form-control" name="fecha_publicacion" value="<?php echo $resultado_unico['fecha_publicacion'] ?>" style="width:500px;height:25px"><br><br></td></tr>
                                    <tr><td>Fecha de Caducidad: </td><td><input type="text" class="form-control" name="fecha_caducidad" value="<?php echo $resultado_unico['fecha_caducidad'] ?>" style="width:500px;height:25px"><br><br></td></tr>
                                    <tr><td>País: </td><td><input type="text" class="form-control" name="pais" value="<?php echo $resultado_unico['pais'] ?>" style="width:500px;height:25px"><br><br></td></tr>
                                    <tr><td>Sede: </td><td><input type="text" class="form-control" name="sede" value="<?php echo $resultado_unico['sede'] ?>" style="width:500px;height:25px"><br><br></td></tr>
                                </table>    
                                    <input type="hidden" name="id_articulo" value="<?php echo $resultado_unico['id_articulo'] ?>"><br>
                                    <center>Nota: Despues de actualizar, refresque la página para visualizar los cambios.</center><br>
                                    <center><button class="btn">Actualizar</button></center><br>
                                    <center><button class="btn"><a href="../vista/index.php">Volver a Home</a></button></center>
                            </form></center>
                        </div>
                  </div>
             </div>
        </section>
    </body>
</html>