<?php

    //Definición de las variables de conexión
    $link = 'mysql:host=localhost;dbname=indra_news';
    $usuario = 'root';
    $pass = '';

    //Conexión a la base de datos
    try {
        $mbd = new PDO($link,$usuario,$pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
        //echo "Conectado"; Prueba para validar la conexión
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }

?>