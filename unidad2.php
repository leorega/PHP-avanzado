<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos_unidad2.css">
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
		<h2>Eventos</h2>
	</section>
	<aside>
		<h3>Calcular fecha</h3>
		<form class="form_cont" action="calculo_fecha.php" method="POST">
			<div class="form_info_cont">
				<label class="label" >
					Día
					<input class="input" type="text" name="dia" required>
				</label>
				<label class="label" >
					Mes 
					<input class="input" type="text" name="mes" required>
				</label>
				<label class="label" >
					Año
					<input class="input" type="text" name="ano" required>
				</label>
			</div>
			<button type="submit">Calcular</button>
		</form>
  	</aside>
  	<div class="date_cont">
	  	<?php
        	session_start(); // Inicia la sesión
        	if(isset($_SESSION['fecha_pasada'])){
            	echo "<p>{$_SESSION['fecha_pasada']}</p>";
            	unset($_SESSION['fecha_pasada']); // Limpia la variable de sesión
        	}
        	if(isset($_SESSION['fecha_faltante'])){
            	echo "<p>{$_SESSION['fecha_faltante']}</p>";
            	unset($_SESSION['fecha_faltante']); // Limpia la variable de sesión
        	}
        ?>  
	</div>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>