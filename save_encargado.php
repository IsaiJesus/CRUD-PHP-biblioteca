<?php
    
    include("db.php");

    //recuperar las variables
    //encargado
    $name_encargado = $_POST['name_encargado'];
    //sentencia de sql, inserta los datos de los input en la base de datos
    //encargados
    $sql = "INSERT INTO encargados (name_encargado) VALUES ('$name_encargado')";    
    //ejecutamos la sentencia de sql
    $result = mysqli_query($conn, $sql);
    //verificamos la ejecucion
    if(!$result){
        echo"<h1>Hubo algun error</h1> <a href='index.php'>Volver al inicio</a>";
    }

    $_SESSION['message'] = 'Se ha agregado al encargado.';
    $_SESSION['message_type'] = 'success';

    //redirecciona a la pagina de encargados
    header("Location: encargados.php");

?>