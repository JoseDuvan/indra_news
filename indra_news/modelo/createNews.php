<?php session_start();
    //Llamado de la conexión
    include_once '../controlador/conexion.php';    
    
    //Lectura de la base de datos y almacenamiento en array
    include_once 'reedNews.php';   

    //Carga de imagenes
    require_once('../controlador/upload.php');
    $foto_art = new Upload($_FILES["foto"]);
    $imagen_art = new Upload($_FILES["imagen"]);

    $foto_art->Process('../vista/images');

    if($foto_art->processed){
        echo 'Foto Cargada Correctamente <br><br>';
        $ruta_foto = $foto_art->file_dst_pathname; 
    }else{
        echo 'Error al Cargar la Foto<br><br>';
    }

    $imagen_art->Process('../vista/images');

    if($imagen_art->processed){
        echo 'Imagen Cargada Correctamente<br><br>';
        $ruta_imagen = $imagen_art->file_dst_pathname;
    }else{
        echo 'Error al Cargar la Imagen<br><br>';
    }    
    
    //Agregar información en la base de datos
    IF($_POST){
        $cat = filter_input(INPUT_POST, "categoria");
        $tit = filter_input(INPUT_POST, "titulo");
        $aut = filter_input(INPUT_POST, "autor");
        $fot = $ruta_foto;
        $car = filter_input(INPUT_POST, "cargo");
        $con = filter_input(INPUT_POST, "contenido");
        $img = $ruta_imagen;
        $fep = filter_input(INPUT_POST, "fecha_publicacion");
        $fec = filter_input(INPUT_POST, "fecha_caducidad");
        $pai = filter_input(INPUT_POST, "pais");
        $sed = filter_input(INPUT_POST, "sede");        
        
        //Sentencia para inserción en la base de datos
        $sql_agregar = 'INSERT INTO articulos (categoria,titulo,autor,foto,cargo,contenido,imagen,fecha_publicacion,fecha_caducidad,pais,sede) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
        $sentencia_agregar = $mbd->prepare($sql_agregar);
        $sentencia_agregar->execute(array($cat,$tit,$aut,$fot,$car,$con,$img,$fep,$fec,$pai,$sed));

        //Cerrar la conexión con la base de datos
        $sentencia_agregar=NULL;
        $mbd = NULL;
        header('location: ../vista/index.php');

    }
?>