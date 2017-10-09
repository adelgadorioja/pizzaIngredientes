<!DOCTYPE html>
<html>

<head>
	<title>Crea tu pizza</title>
	<meta charset="utf-8">
	<style type="text/css">
	</style>
</head>

<body>
<?php
	include_once "datos.php";
	include_once "funciones.php";

	$obtenerDatos = ( $_SERVER['REQUEST_METHOD'] == 'POST' );
	$ingredientesObligatorios = isset( $_REQUEST['ingredientes'] ) && is_array( $_REQUEST['ingredientes'] ) && 	in_array( 0, $_REQUEST['ingredientes'] ) &&	in_array( 1, $_REQUEST['ingredientes'] );

	if ($obtenerDatos && $ingredientesObligatorios )  {
		// si los datos son correctos muestra el precio de la pizza
		procesarDatos( $_REQUEST['ingredientes']);
	}

	else {
		// si los datos son incorrectos vuelve al formulario
		$ingredientesSeleccionados = array();
		if ($obtenerDatos && !$ingredientesObligatorios ) {
			//si les dades són erronies renyar a l'usuari
			informarUsuario();
			$ingredientesSeleccionados = $_REQUEST['ingredientes'];
		}
		volverFormulario($ingredientesSeleccionados);
	}
?>
</body>

</html>