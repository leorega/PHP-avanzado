<?php 
    session_start();
    header("Content-type image/jpeg");

    $imgCaptcha = imagecreate(50, 20);
    imagecolorallocate($imgCaptcha, 126, 190, 222);
    
    $colorText = imagecolorallocate($imgCaptcha, 198, 0, 0);

    imagestring($imgCaptcha, 1, 10, 5, $_SESSION["captcha"], $colorText);

    imagejpeg($imgCaptcha);
?>