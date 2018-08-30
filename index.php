<?php session_start();

require 'funsiones.php';

//declarando variables

$fotos_por_pagina = 8;
										//no inyecte numero en la pagina
$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1 );
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

//conectar
$conexion = conexion('galeria_practica', 'root', 'felipe24');
	if (!$conexion){
		die();
	}

//consulta SQL
	$consulta = $conexion->prepare("
		SELECT SQL_CALC_FOUND_ROWS * FROM galeria LIMIT $inicio,$fotos_por_pagina
		");

	$consulta->execute();
	$fotos = $consulta->fetchAll();
	if (!$fotos) {
		header('Location: index.php');
	}


	$consulta = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
	$consulta->execute();
	$total_post = $consulta->fetchAll()['total_filas'];

	$total_paginas = ceil($total_post / $fotos_por_pagina);

require 'vistas/index.vista.php';

?>