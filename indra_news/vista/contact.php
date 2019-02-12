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

        <title>IndraNews - Contácto</title>
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

        <!-- Home Section -->

        <section id="home" class="main-contact parallax-section">
             <div class="overlay"></div>
             <div class="container">
                  <div class="row">

                       <div class="col-md-12 col-sm-12">
                            <h1>Contáctanos</h1>
                       </div>

                  </div>
             </div>
        </section>

        <!-- Sección donde se define el formulario de contacto -->

        <section id="contact">
             <div class="container">
                  <div class="row">

                       <div class="col-md-offset-1 col-md-10 col-sm-12">
                            <h2>Contácto con Indra</h2>
                            <p>Por favor rellene este formulario para enviar su mensaje.</p>

                            <form action="#" method="post">
                                 <div class="col-md-4 col-sm-4">
                                      <input name="name" type="text" class="form-control" id="name" placeholder="Nombre">
                                 </div>
                                 <div class="col-md-4 col-sm-4">
                                      <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                                 </div>
                                 <div class="col-md-4 col-sm-4">
                                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Tema">
                                 </div>
                                 <div class="col-md-12 col-sm-12">
                                      <textarea name="message" rows="5" class="form-control" id="message" placeholder="Mensaje"></textarea>
                                 </div>
                                 <div class="col-md-3 col-sm-6">
                                      <input name="submit" type="submit" class="form-control" id="submit" value="Enviar">
                                 </div>
                            </form>
                       </div>

                  </div>
             </div>
        </section>

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