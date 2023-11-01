<?php 
    $src_img = imagecreatefromjpeg("imagenes/unidad4.jpg");
    $dst_img = imagecreatetruecolor( 150, 150);
    $image = imagecreate( 150, 150);
    imagecopyresized($dst_img, $src_img, 0, 0, 0, 0, 150, 150, imagesx($src_img), imagesx($src_img));
    imagejpeg($dst_img, "imagenes/thumb.jpg");
    imagedestroy($dst_img);
?>
