<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos_unidad1.css">
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
		<h2>Agenda de clases</h2>
	</section>
	<aside>
		<form class="form_cont" action="insertar_clases.php" method="POST">
			<label class="label" >
				Unidad 
				<input class="input" type="text" name="unidad" maxlength="30" required>
			</label>
			<label class="label" >
				Fecha 
				<input class="input" type="Date" name="fecha" required>
			</label>
			<button type="submit">Cargar</button>
		</form>
	</aside>
	<?php 
	if(isset($_GET['error'])) {
		echo '<p class="p">La clase que intentas cargar ya fue cargada.</p>';
	}; 
	?>
	<?php include('ver_clases.php'); ?>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>