<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>IndraNews - Login</title>
        <!--

        Template 2085 Neuron

        http://www.tooplate.com/view/2085-neuron

        -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">

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
        ?>

        <!-- Loguearse -->

        <?php
        //Valido si hay una sesión iniciada
            if(isset($_SESSION['admin'])){

            }else{
                echo '<center><h2><a href="../vista/forms/acceso.php">Iniciar Sesión</a></h2></center><br>';
                echo '<center><h2><a href="../vista/forms/registro.php">Registrarse</a></h2></center><br>';
        }
        ?>


        <!-- Llamado del footer por medio de un include -->

        <?php
            include 'includes/footer.php';    
        ?>

        <!-- Back top -->
        <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

        <!-- SCRIPTS -->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.parallax.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>