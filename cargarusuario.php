<?php
    include("recursos.php");

    $pass = password_hash($_POST["password"], PASSWORD_DEFAULT, array('cost'=>4));

    $verificar = $usuario->verificar_usuario($_POST["email"]);

    if($verificar) {
        header("Location: unidad8.php?usuarioyaexiste");
    }
    else {
        $usuario->cargar_usuario($_POST["email"], $pass);
        header("Location: unidad8.php?cargarOk");
    }

?>