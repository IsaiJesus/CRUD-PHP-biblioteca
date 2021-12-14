<?php
    include("db.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM estudiantes WHERE id_estudiante = $id";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            die("Query failed");
        }

        $_SESSION['message'] = 'Alumno eliminado';
        $_SESSION['message_type'] = 'danger';
        header("Location: alumnos.php");
    }

?>