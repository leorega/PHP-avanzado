<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos_unidad8.css">
  	<link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php 
			include("botonera.php");
			include("recursos.php");
		?>
	</nav>
	</header>
	<section class="section">
		<h2>Registro</h2>
		<form class="form_reg_cont" action="cargarusuario.php" method="POST">
			<input class="input" type="email" name="email" placeholder="Email" required>
			<input class="input" type="password" name="password" placeholder="contraseña" minlength="4" maxlength="10" required>
			<button class="button" type="submit">Registrarme</button>
		</form>
		<?php 
			if(isset($_GET['cargarOk'])){
				echo "<h2>Te registraste correctamente</h2>";
			};
			if(isset($_GET['usuarioyaexiste'])){
				echo "<h2>Ya estás registrado. Puedes ingresar en el formulario de ingreso => </h2>";
			};
			if(isset($_GET['validarOk'])){
				echo "<h2>Ingreso exitoso. Bienvenido!!!</h2>";
			};
			if(isset($_GET['validarError'])){
				echo "<h2>La contraseña ingresada es incorrecta</h2>";
			};
			if(isset($_GET['usuarionoexiste'])){
				echo "<h2>No estás registrado!</h2>";
			};
		?>
	</section>
	<aside class="aside">
		<h2>Ingreso</h2>
    	<form class="form_Ing_cont" action="verificarusuario.php" method="POST">
			<input class="input" type="email" name="email" placeholder="Email" required>
			<input class="input" type="password" name="password" placeholder="contraseña" required>
			<button class="button" type="submit">Ingresar</button>
		</form>
  	</aside>
	
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>