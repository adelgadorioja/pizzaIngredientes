<!DOCTYPE html>
<html>
<head>
	<title>Resultado pizza</title>
</head>
<body>

	<?php
		$ingredientes = array(
			0 => 'Masa',
			1 => 'Orégano',
			2 => 'Queso',
			3 => 'Jamón dulce',
			4 => 'Bacon'
		);
		$precioTotal = 5;
		
		$ingredientesSeleccionados = $_POST["menuIngredientes"]; // Se guardan los elementos en la variable.
		echo "<h1>Ingredientes de la pizza</h1>";
		echo "<ul>";
		foreach ($ingredientesSeleccionados as $key) {
			echo "<li>$ingredientes[$key]</li>";
			$precioTotal += 0.5;
		}
		echo "</ul>";
		echo "<p>Precio: $precioTotal</p>";
	?>
</body>
</html>