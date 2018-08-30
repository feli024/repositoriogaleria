<?php session_start();
require 'funsiones.php';

$conexion = conexion('galeria_practica', 'root', 'felipe24');
if (!$conexion) {
	die();
}


//Subier Archivo foto

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
	$check = @getimagesize($_FILES['foto']['tmp_name']);
	if ($check !== false) {
	$carpeta_destino = 'archivos/';
		$archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
		move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

//consulta SQL
		$consulta = $conexion->prepare('
			INSERT INTO galeria (titulo, imagen, texto)
			VALUES (:titulo, :imagen, :texto) 	');

		$consulta->execute(array(
			':titulo' => $_POST['titulo'],
			':imagen' => $_FILES['foto']['name'],
			':texto' => $_POST['texto'] ));

		header('Location:index.php');

		} else{
			$error = "El archivo no es una imagen o es muy pesado";
		}
	}	


	require 'vistas/subir.vista.php'
?>