<?php
/**
 * Recibe los valores enviados al agregar producto al carrito, los envía como un array hacia una variable global que luego será leída y mostrará los datos guardados.
 */
session_start();
if (isset($_SESSION['carrito']) || isset($_POST['titulo'])) {
	if (isset($_SESSION['carrito'])) {
		$carrito_mio = $_SESSION['carrito'];
		if (isset($_POST['titulo'])) {
			$titulo = $_POST['titulo'];
			$precio = $_POST['precio'];
			$cantidad = $_POST['cantidad'];
			$ref = $_POST['ref'];
			$imagen = $_POST['imagen'];
			$donde = -1;
			for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
				if ($ref == $carrito_mio[$i]['ref']) {
				}
			}
			if ($donde != -1) {
				$cuanto = $carrito_mio[$donde]['cantidad'] + $cantidad;
				$carrito_mio[$donde] = array("titulo" => $titulo, "precio" => $precio, "cantidad" => $cuanto, "ref" => $ref, "imagen" => $imagen);
			} else {
				$carrito_mio[] = array("titulo" => $titulo, "precio" => $precio, "cantidad" => $cantidad, "ref" => $ref, "imagen" => $imagen);
			}
		}
	} else {
		$titulo = $_POST['titulo'];
		$precio = $_POST['precio'];
		$cantidad = $_POST['cantidad'];
		$ref = $_POST['ref'];
		$imagen = $_POST['imagen'];
		$carrito_mio[] = array("titulo" => $titulo, "precio" => $precio, "cantidad" => $cantidad, "ref" => $ref, "imagen" => $imagen);
	}
	if (isset($_POST['cantidad'])) {
		$id = $_POST['id'];
		$cuantos = $_POST['cantidad'];
		if ($cuantos < 1) {
			$carrito_mio[$id] = NULL;
		} else {
			$carrito_mio[$id]['cantidad'] = $cuantos;
		}
	}
	if (isset($_POST['id2'])) {
		$id = $_POST['id2'];
		$carrito_mio[$id] = NULL;
	}
	$_SESSION['carrito'] = $carrito_mio;
}
if (isset($_SESSION['carrito'])) {
	for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
		if ($carrito_mio[$i] != NULL) {
			$totalc = $carrito_mio['cantidad'];
			$totalc++;
			$totalcantidad += $totalc;
		}
	}

	//todo OK

} else {
	// algo ha salido mal
}