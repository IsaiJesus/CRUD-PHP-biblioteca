<?php
    
    include("db.php");

    //recuperar las variables
    //libro
    $title_book = $_POST['title_book'];
    $materia_book = $_POST['materia_book'];
    //sentencia de sql, inserta los datos de los input en la base de datos
    //libros
    $sql = "INSERT INTO libros (title_book, materia_book) VALUES ('$title_book', '$materia_book')";    
    //ejecutamos la sentencia de sql
    $result = mysqli_query($conn, $sql);
    //verificamos la ejecucion
    if(!$result){
        echo"<h1>Hubo algun error</h1> <a href='index.php'>Volver al inicio</a>";
    }

    $_SESSION['message'] = 'Se ha agregado el libro.';
    $_SESSION['message_type'] = 'success';

    //redirecciona a la pagina principal
    header("Location: index.php");

?>