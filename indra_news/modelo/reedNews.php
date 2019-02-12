<?php

    //Leer los datos de la base de datos, y los ordena de manera descendente para mostrar las últimas noticias o artículos primero
    $sql_leer = 'SELECT * FROM articulos ORDER BY `fecha_publicacion` DESC, `id_articulo` DESC;';      
   
    //Guardar la conexión
    $gsent = $mbd->prepare($sql_leer);
    $gsent->execute();
     
    //Devolver un array con la información contenida en BD
    $resultado = $gsent->fetchAll();  

