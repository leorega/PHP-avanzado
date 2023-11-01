<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos_unidad3.css">
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Comentarios</h2>
		<?php 
			$file = fopen('comentarios.txt', 'r');
			fpassthru($file);
			fclose($file);
		?>
	</section>
	<aside>
		<form class="form_cont" action="comentarios.php" method="POST">
			<input class="input" type="text" name="name" placeholder="Nombre y apellido" required>
			<input class="input" type="mail" name="email" placeholder="email" required>
			<textarea class="textarea" name="comments" placeholder="Dejanos acá tu comentario" required></textarea>
			<button class="button" type="submit">Enviar comentario</button>
		</form>
  	</aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>