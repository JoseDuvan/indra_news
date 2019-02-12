<?php session_start();

    //Llamado de la conexión
    include_once '../controlador/conexion.php';  

    //echo password_hash("blue", PASSWORD_DEFAULT)."\n"; Ejecución de pruebas de cifrado
    //Capturar datos por POST
    $usuario_nuevo = $_POST['nombre_usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena2 = $_POST['contrasena2'];

    //Validar que el usuario exista
        $sql_comparar = 'SELECT * FROM usuarios WHERE usuario=?';
        $sentencia_comparar = $mbd->prepare($sql_comparar);
        $sentencia_comparar->execute(array($usuario_nuevo));
        $resultado_compa = $sentencia_comparar->fetch();

        if($resultado_compa){
            echo '<br>El nombre de usuario ya existe';
        echo '<center><button class="btn"><a href="../vista/forms/registro.php">Volver</a></button></center>';            
            die();
        }

    //Hash de la contraseña        
    $contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

    if(password_verify($contrasena2, $contrasena)){
        echo '<br>La contraseña es válida!<br>';
    
        //Sentencia de inserción en la base de datos
        $sql_agregar_user = 'INSERT INTO usuarios (usuario,contrasena) VALUES (?,?)';
        $sentencia_agregar_user = $mbd->prepare($sql_agregar_user);

    if($sentencia_agregar_user->execute(array($usuario_nuevo,$contrasena))){
            echo 'Usuario Agregado<br>';
    }else{
           echo 'Error al Cargar el Usuario';
    }

        //Cerrar la conexión con la base de datos
        $sentencia_agregar=NULL;
        $mbd = NULL;
        header('location: ../vista/forms/acceso.php');

    }else{
        echo 'Las contraseñas no son iguales';
        echo '<center><button class="btn"><a href="../vista/forms/registro.php">Volver</a></button></center>';
}

