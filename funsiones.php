<?php  

function conexion($tabla, $usuario, $pass){
	try {
		$conexion = new PDO("mysql:host=localhost;dbname=$tabla", $usuario, $pass);
		return $conexion;
	} catch(PDOException $e) {
	  return false;
	  }	
}

function contenido_mostrar($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM galeria WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;

}

?>