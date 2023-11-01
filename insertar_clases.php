<?php 
    $unidad = $_POST["unidad"];
    $fecha = $_POST["fecha"];

    include('conexion.php');

    $verify_clase = mysqli_query($connection, "SELECT unidad FROM clases WHERE unidad='$unidad'");

    if(mysqli_num_rows($verify_clase)==0) {
        mysqli_query($connection, "INSERT INTO clases VALUES (default, '$unidad', '$fecha')");
        header('Location: unidad1.php');
    }
    else {
        header('Location: unidad1.php?error');
    }


?>