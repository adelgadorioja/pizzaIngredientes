<!DOCTYPE html>
<html>

<head>
	<title>Crea tu pizza</title>
	<meta charset="utf-8">
	<style type="text/css">
	</style>
</head>

<body>
	<form method="POST" action="resultado.php">
		<select multiple name='menuIngredientes[]'>
			<?php
				$ingredientes = array(
					0 => 'Masa',
					1 => 'Orégano',
					2 => 'Queso',
					3 => 'Jamón dulce',
					4 => 'Bacon'
				);
				foreach ($ingredientes as $key => $value) {
					echo "<option value='$key'>$value</option>\n";
				}
			?>
		</select>
		<input type='submit' value='Pedir pizza'>
	</form>
</body>

</html>