<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos_unidad7.css">
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
	<section>
		<h2>Compras</h2>
		<table class="table">
			<tr class="head">
				<th>Código</th>
				<th>Producto</th>
				<th>Descripción</th>
				<th>Precio</th>
				<th>Agregar al carrito</th>
			</tr>
			<?php 
				$mostrarProductos = $producto->listar_productos();
				for ($i=0; $i<count($mostrarProductos); $i++) { 
			?>
			<tr class="body">
				<td><?php echo $mostrarProductos[$i]['codigo'] ?></td>
				<td><?php echo $mostrarProductos[$i]['producto'] ?></td>
				<td><?php echo $mostrarProductos[$i]['descripcion'] ?></td>
				<td><?php echo $mostrarProductos[$i]['precio'] ?></td>
				<td><a href="./introducir_compra.php?
					cod=<?php echo $mostrarProductos[$i]['codigo'] ?>&&
					prod=<?php echo $mostrarProductos[$i]['producto'] ?>&&
					desc=<?php echo $mostrarProductos[$i]['descripcion'] ?>&&
					pre=<?php echo $mostrarProductos[$i]['precio'] ?>
				">Comprar</a></td>
			</tr>
			<?php 
				}
			?>
		</table>
	</section>
	<aside>
    <h2>Tu Carrito</h2>
	<?php 
		$mostrarCompras = $carrito->listar_compra();
		if($mostrarCompras) {
		$total = 0;
		for ($i=0; $i<count($mostrarCompras); $i++) { 
			$total = $total + $mostrarCompras[$i]['precio'];
	?>
	<div class="cont_compra">
		<h3>Producto: <?php echo $mostrarCompras[$i]['producto'] ?></h3>
		<h4>Precio: <?php echo $mostrarCompras[$i]['precio'] ?></h4>
		<form method="post" action="eliminar_compra.php">
            <input type="hidden" name="compra_id" value="<?php echo $mostrarCompras[$i]['id_compra']; ?>">
            <input id="button" type="submit" name="eliminar_compra" value="Eliminar">
        </form>
	</div>	
	<?php
		}
		echo "<h3 style='color:red'>Compra total: $total</h3>";
	}
		else {
			echo "<p>Tu carrito está vacío</p>";
		}
	?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>