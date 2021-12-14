<?php
    include("db.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM libros WHERE id_libro = $id";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            die("Query failed");
        }

        $_SESSION['message'] = 'Libro eliminado';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
    }

?>