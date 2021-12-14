<?php
    
    include("db.php");

    $name_student = $_POST['name_student'];
    $grade_student = $_POST['grade_student'];
    $group_student = $_POST['group_student'];
    $especialidad = $_POST['especialidad'];
    $book_student = $_POST['book_student'];
    
    $sql = "INSERT INTO estudiantes (name_student, grade_student, group_student, especialidad, id_libro) 
    VALUES ('$name_student', '$grade_student', '$group_student', '$especialidad', '$book_student')";    
    
    $result = mysqli_query($conn, $sql);
    
    if(!$result){
        echo"<h1>Hubo algun error</h1> <a href='index.php'>Volver al inicio</a>";
    }

    $_SESSION['message'] = 'Se ha agregado el alumno.';
    $_SESSION['message_type'] = 'success';

    header("Location: alumnos.php");

?>