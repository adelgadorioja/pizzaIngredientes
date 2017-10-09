<?php

  function procesarDatos($ingredientes) {
    global $listaIngredientes;

    $precioTotal = 5.0;

    $ingredientesSolicitados = "";
    foreach ($ingredientes as $value) {
      $ingredientesSolicitados = $ingredientesSolicitados.
      "<li>".
      $listaIngredientes[$value].
      "</li>";
      $precioTotal += 0.5;
    }

    $texto = "<h1>Has pedido la siguiente pizza:</h1>
    <ul>
    $ingredientesSolicitados
    </ul>
    <h3>Precio: $precioTotal</h3>
    ";

    echo $texto;
  }

  function volverFormulario( $ingredientes ) {
    global $listaIngredientes;

    $opcionesIngredientes = "";

    foreach ($listaIngredientes as $key => $value) {

      $selected = "";
      if ( in_array($key, $ingredientes) ) {
        $selected = " selected ";
      }
      if ( $key==0 || $key==1 ) {
        $selected = " selected ";
      }

      $opcionesIngredientes = $opcionesIngredientes .
      "<option value='$key' $selected>$value</option>";
    }

    $formulario = "
    <form method='post' action=''>
    <select  multiple name='ingredientes[]'>
    $opcionesIngredientes
    </select>
    <br>
    <input type='submit' value='demanar pizza'>
    </form>
    ";

    echo $formulario;
  }

  function informarUsuario() {
    echo "<h4>No tienes ni idea sobre pizzas.</h4>";
  }

?>