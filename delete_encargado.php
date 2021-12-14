<?php
    include("db.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM encargados WHERE id_encargado = $id";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            die("Query failed");
        }

        $_SESSION['message'] = 'Encargado eliminado';
        $_SESSION['message_type'] = 'danger';
        header("Location: encargados.php");
    }

?>