<!--Menú principal-->
<div class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="index.php" class="navbar-brand">Indra</a>
          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="contact.php">Contact</a></li>
               </ul>
          </div>

  </div>
</div>
<?php
//Valido si hay una sesión iniciada
    if(isset($_SESSION['admin'])){
        echo '<h3><center>Hola!!! '.$_SESSION['admin'].'<h3><center>';
        echo '<h4><center><a href="../controlador/cerrarSes.php">Cerrar Sesión</a></center></h4>';
    }else{
        echo'<h4><P align="right">Usuario No Autenticado</p></h4>';
}
?>