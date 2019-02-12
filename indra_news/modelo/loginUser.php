<?php session_start();

    include_once '../controlador/conexion.php';  

    //Llamado por POST
    $usuario_login = $_POST['nombre_usuario'];
    $contrasena_login = $_POST['contrasena'];

    //Validar que el usuario exista
        $sql_comparar = 'SELECT * FROM usuarios WHERE usuario=?';
        $sentencia_comparar = $mbd->prepare($sql_comparar);
        $sentencia_comparar->execute(array($usuario_login));
        $resultado_compa = $sentencia_comparar->fetch();

    if(!$resultado_compa){
        //Termina la Ejecución
        echo 'El usuario no existe';
        echo '<center><button class="btn"><a href="../vista/forms/acceso.php">Volver</a></button></center>';
        die();
    }

    if(password_verify($contrasena_login, $resultado_compa['contrasena'])){
        //Las contraseñas son iguales
        $_SESSION['admin'] = $usuario_login;
        header('location: ../vista/index.php');
    }else{
        echo 'Contraseña Incorrecta';
        echo '<center><button class="btn"><a href="../vista/forms/acceso.php">Volver</a></button></center>';
        die();
    }

