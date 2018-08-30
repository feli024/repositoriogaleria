<?php session_start();

require 'funsiones.php';

$conexion = conexion('galeria_practica', 'root', 'felipe24');
if (!$conexion) {
	die();
}
						//si se cumple se guarda el valor entero 
$id = isset($_GET['id']) ? (int)$_GET['id'] : false;  
		//por seguridad de reenvia al index
	if (!$id) {
		header('Location: index.php');
}

$consulta = $conexion->prepare('SELECT * FROM galeria WHERE id= :id');
$consulta->execute(array(':id' => $id));

$foto = $consulta->fetch();

	if (!$foto) {
		header('Location: index.php');
}




require 'vistas/foto.vista.php';

?>