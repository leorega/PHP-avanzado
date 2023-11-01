<?php session_start(); ?>
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
		<h2>Consultas</h2>
		<?php 
		if(isset($_GET["errorCode"])) {
			echo "<h3>Código de captcha incorrecto</h3>";
		}
		if(isset($_GET["success"])) {
			echo "<h3>Gracias por comunicarse con nosotros. Su consulta será respondida tan pronto como sea posible</h3>";
		}
		?>
	</section>
	<?php 
	function txtCaptcha() {
		$cadena = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$cadenaCaptcha = "";
		for ($i = 0; $i < 5; $i++) { 
			$cadenaCaptcha .= $cadena[rand(0, 61)];
		};
		return $cadenaCaptcha;
	};
	$_SESSION["captcha"] = txtCaptcha();
	?>
	<aside>
		<form class="form_cont" action="cargar.php" method="POST">
			<input class="input" type="text" name="name" placeholder="Nombre" required>
			<input class="input" type="text" name="last_name" placeholder="Apellido" required>
			<input class="input" type="mail" name="email" placeholder="email" required>
			<textarea class="textarea" name="consultation" placeholder="Dejanos acá tu consulta" required></textarea>
			<img src="captcha.php" alt="captcha">
			<input class="input" type="text" name="code" placeholder="Código de seguridad" required>
			<button class="button" type="submit">Enviar consulta</button>
		</form>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>