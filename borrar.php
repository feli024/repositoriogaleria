<?php session_start();
require 'funsiones.php';

$conexion = conexion('galeria_practica', 'root', 'felipe24');
if (!$conexion) {
	die();
}

$id = $_GET['id'];
if (!$_GET) {
	header('Location: index.php');

}


$consulta = $conexion->prepare('DELETE FROM galeria WHERE id = :id ');
$consulta ->execute(array('id' => $id));
	header('Location: index.php');

?>