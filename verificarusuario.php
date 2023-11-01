<?php
    include("recursos.php");

    $pass = $_POST["password"];

    $verificar = $usuario->verificar_usuario($_POST["email"]);

    if(count($verificar)==1) {
        $usuarioInfo = $verificar[0];
        $validar = password_verify($pass, $usuarioInfo['password']);

        if($validar) {
            header("Location: unidad8.php?validarOk");
        }
        else {
            header("Location: unidad8.php?validarError");
        }
    }
    else {
        header("Location: unidad8.php?usuarionoexiste");
    }
?>