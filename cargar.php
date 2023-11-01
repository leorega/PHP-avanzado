<?php 
    session_start();

    include("conexion.php");

    $name = $_POST["name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $consultation = $_POST["consultation"];

    if($_POST["code"] == $_SESSION["captcha"]) {
        mysqli_query($connection, "INSERT INTO consultas VALUES (default, '$name', '$last_name', '$email', '$consultation')");
        header("Location: unidad5.php?success");
    } else {
        header("Location: unidad5.php?errorCode");
    };
?>