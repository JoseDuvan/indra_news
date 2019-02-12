<?php
    //Llamado de la conexión
    include_once '../controlador/conexion.php';    
    
    //Lectura de la base de datos y almacenamiento en array
    include_once 'reedNews.php';   

    IF($_GET){
        $id = filter_input(INPUT_GET, "id_articulo");    
    
        //Sentencia de eliminación de la base de datos
        $sql_eliminar = 'DELETE FROM articulos WHERE id_articulo=?';      
        $sentencia_eliminar = $mbd->prepare($sql_eliminar);
        $sentencia_eliminar->execute(array($id));

        //Cerrar la conexión con la base de datos
        $sentencia_eliminar=NULL;
        $mbd = NULL;
    
        //Retorno al index
        header('location: ../vista/index.php');
    
}