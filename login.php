<?php  
	session_start();

//if (isset($_SESSION['usuario'])) {
	//header('Location: index.php');
//}
$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = $_POST["nombre"];
	$pass = $_POST["contraseña"];

	$conectar = mysql_connect('localhost', 'root', 'felipe24');
	
	if(!$conectar){
		echo "No se pudo conectar al servidor";
	}
	else{ 

		$base=mysql_select_db('galeria_practica');
		if(!base){
			echo "no se encontro la base de datos";
		}
	}

	/*$statement = $conexion->prepare("SELECT * FROM usuario WHERE nombre = '$nombre' AND pass = '$pass'"

	);
	*/
	$resultado = mysql_query("SELECT * FROM usuario WHERE nombre = '$nombre' AND contraseña = '$pass'");
	
	if(!$resultado){
			echo "Tenemos un problema, revisar porfavor";
		}
		//else{ 		      	
			//echo "resultado: no se encuentra registrado ";
		//}

	//$statement->execute();
		/*array(
		':nombre' => $nombre,
		':pass' => $pass
	)
	);
*/
	//$resultado = $statement->fetch(); 
	//$resultado = "SELECT * FROM usuario WHERE nombre = $nombre AND pass = $pass";
	//echo '$resultado :'; //.$resultado;
	if(mysql_num_rows($resultado)) {
		$_SESSION['usuario'] = $nombre;//los datos son correctos
		//header('Location: index.php');
	header('Location: index.php');
		//require 'login.registro.vista.php';
	} else {
		//require 'index.php';
		
		$errores = "<li>Usuario no Registrado</li>"; 
		
		require 'login.registro.vista.php';
	}
}

?>