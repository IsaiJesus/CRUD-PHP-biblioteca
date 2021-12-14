<?php

    session_start();

    //crear variables de la base de datos
    $host ='localhost';
    $user ='root';
    $pass ='';
    $db='biblioteca';

    //funcion para conexion con (dominio, usuario, contraseña, base de datos)
    $conn = mysqli_connect($host, $user, $pass, $db)or die("Problemas al conectar con la base de datos.");
    //selecciona la base de datos que se usará
    mysqli_select_db($conn, $db)or die("Problemas al conectar con la base de datos");
?>