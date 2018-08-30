<?php  session_start();
require 'funsiones.php';

$conexion = conexion('galeria_practica', 'root', 'felipe24');
	if (!$conexion) {
	die();
}


	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$foto_guardada = $_POST['foto-guardada'];
			$imagen = $_FILES['foto'];
			$id = $_POST['id']; 
			$titulo = $_POST['titulo'];
			$texto = $_POST['texto'];


			if (empty($imagen['name'])) {
				$imagen = $foto_guardada; //foto guardada anteriormente.
			}else {//se otra forma se carga la nueva imagen
				
				$archivo_subido = 'archivos/' . $_FILES['foto']['name'];
				move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);
				$imagen = $_FILES['foto']['name'];
			}

			$consulta = $conexion->prepare(
				'UPDATE galeria SET titulo = :titulo, imagen = :imagen, texto = :texto WHERE id = :id');

			$consulta->execute(array(
			':titulo' => $titulo,
			':imagen' => $imagen,
			':texto' => $texto, 
			':id'=> $id));

			header('Location: index.php');

}	else {
		$id_contenido = ($_GET['id']);
			if (empty($id_contenido)) {
			header('Location: index.php');
	}

  $post = contenido_mostrar($conexion, $id_contenido);
	if (!$post) {
		header('Location: index.php');
	}
  $post = $post[0];
}

require 'vistas/editar.vista.php';

?>