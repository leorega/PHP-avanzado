<?php

    date_default_timezone_set("America/Argentina/Buenos_Aires");

    $fecha = date("d/m/Y H:i");

    $name = $_POST['name'];
    $mail = $_POST['email'];
    $comment = $_POST['comments'];

    $html = '<div class="comment_cont"><h3>'.$name.'</h3><h4>'.$mail.'</h4><p>Comentario:<br><br>'.$comment.'<br><br></p><p>'.$fecha.' hs.</p></div>';

    $file = fopen('comentarios.txt', 'a+');

    fwrite($file, $html);

    fclose($file);

    header('Location: unidad3.php');
?>