<?php session_start();

    //Llamado de la conexión
    include_once '../controlador/conexion.php';    
    
    //Lectura de la base de datos y almacenamiento en array
    include_once '../modelo/reedNews.php';  

?>

<!-- Template descargado con plantilla Bootsrtap para visualización, el cual es revisado y modificado según las necesidades -->

<!DOCTYPE html>
<html lang="es">
        <head>
        <meta charset="utf-8">
        <!--<meta http-equiv="Content-type" content="text/html">-->
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>IndraNews - Home</title>
        <!--

        Template 2085 Neuron

        http://www.tooplate.com/view/2085-neuron

        -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" crossorigin="anonymous">

    </head>
    <body>

        <!-- PRE LOADER -->

        <div class="preloader">
             <div class="sk-spinner sk-spinner-wordpress">
                  <span class="sk-inner-circle"></span>
             </div>
        </div>

        <!-- Llamado del menú por medio de un include -->

        <?php
            include 'includes/menu.php';

        //Valido si hay una sesión iniciada para mostrar el contenido de creación
            if(isset($_SESSION['admin'])){
                echo '<br><button class="btn"><a href="../vista/forms/articulos.php">Agregar Nuevo Artículo o Noticia</a></button><br><br>';
            }else{
            }
        ?>

        <!-- Home Section -->

        <section id="home" class="main-home parallax-section">
             <div class="overlay"></div>
             <div id="particles-js"></div>
             <div class="container">
                  <div class="row">
                       <div class="col-md-12 col-sm-12">
                            <h1><font color="#BFBA5A">¡¡¡Bienvenido a INDRANEWS!!!</font></h1>
                            <h2><br/><br/><br/><br/><br/><br/><br/><br/><i><font color="#BFBA5A"> El sitio donde encontrarás Noticias y Artículos de Interés, Comunicaciones, Eventos y demás 
                            información relevante para los colaboradores de nuestra compañía.</font></i></h2>
                       </div>
                  </div>
             </div>
        </section>

        <!-- Blog Section -->

        <section id="blog">
             <div class="container">
                  <div class="row">            
                       <div class="col-md-offset-1 col-md-10 col-sm-12">

                           <?php 
                           //Recorro el array y traigo a una variable la información de la base de datos, el ciclo se repite por la cantidad de registros en la BD
                            foreach($resultado as $dato):

                           ?>

                           <div class="blog-post-thumb">
                                 <div class="blog-post-title">
                                      <h3><?php echo $dato['titulo'] ?></h3>
                                 </div>
                                 <div class="blog-post-format">
                                     <span><i class="fa fa-date"></i><?php echo "Categoria: ".$dato['categoria'] ?></span> 
                                 </div>                         
                                 <div class="blog-post-image">     
                                           <img src="<?php echo $dato['imagen'] ?>" class="img-responsive" alt="Blog Image">
                                 </div>
                                 <div class="blog-post-format">
                                     <span><img src="<?php echo $dato['foto'] ?>" class="img-responsive img-circle"><?php echo $dato['autor']." - " ?> <?php echo $dato['cargo'] ?></span>
                                 </div>
                                 <div class="blog-post-des">
                                     <p><?php echo $dato['contenido'] ?><br><br></p>
                                 </div>
                                 <div class="blog-post-format">
                                     <span><i class="fa fa-date"></i><?php echo $dato['pais']." - ".$dato['sede'] ?></span>                             
                                     <br>  
                                     <span><i class="fa fa-date"></i><?php echo "Publicación: ".$dato['fecha_publicacion'] ?></span> 

        <?php
        //Valido si hay una sesión iniciada para mostrar el contenido de edición y modificación
            if(isset($_SESSION['admin'])){
                echo '<a href="../modelo/updateNews.php?id_articulo='.$dato['id_articulo'].'">'.' Editar: '.'<i class="far fa-edit"></i></a>';
                echo '<a href="../modelo/deleteNews.php?id_articulo='.$dato['id_articulo'].'">'.' - Borrar: '.'<i class="fas fa-trash-alt"></i></a>';
            }else{
                echo '<br><i>Loguéate para más opciones.</i>';
            }
        ?>

                                 </div>                       
                            </div>                   
                           <?php endforeach; ?>
                       </div>  
                  </div>
             </div>
        </section>
        <?php
        //Valido si hay una sesión iniciada para mostrar el contenido de edición y modificación
            if(isset($_SESSION['admin'])){
            }else{
                echo '<center><h4><b>Nota: Para participar creando tus noticias y artículos debes estar registrado y logueado.</b></h4></center><br><br>';
            }
        ?>

        <!-- Back top -->
        <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

        <!-- SCRIPTS -->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/particles.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/jquery.parallax.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>

<?php
    //Cerrar la conexión con la base de datos
    $mdb=NULL;
    $gsent = NULL;
?>
