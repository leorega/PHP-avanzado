<?php 
 include("clases/usuarios.php");

 $usuario = new Usuarios("Leo", "Rega", "06-08-1982");
 $usuario->imprime_caracteristicas();
?>