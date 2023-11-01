<?php 
    $image = "imagenes/guitar.jpg";
    $marca_agua = "imagenes/marca.png";

    $img = imagecreatefrompng($marca_agua); // creamos la marca de agua
    $ext = substr($image, -3);              // extrae la extención del archivo de imagen
    $ext = strtolower($ext);                // convierte a minúsculas  

    switch ($ext) {
        case 'gif':
            $img2 = imagecreatefromgif($image);
            break;
        case 'jpg':
            $img2 = imagecreatefromjpeg($image);
            break;
        case 'png':
            $img2 = imagecreatefrompng($image);
            break;    
    }
    
    imagecopy($img2, $img, 200, 200, 0, 0, 200, 200);

    header("Content-type: image/jpeg");
    imagejpeg($img2);
    imagedestroy($img);
    imagedestroy($img2);
?>