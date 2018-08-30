<?php 

	//Conectamos a la base de datos

	$conectar=mysql_connect('localhost', 'root', 'felipe24');
	//Verificar
	if(!$conectar){
		echo "No se pudo conectar al servidor";
	}else{ 

		$base=mysql_select_db('dbweb');
		if(!base){
			echo "no se encontro la base de datos";
		}
	}
	//Recuperar variables

		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$contraseña = $_POST["contraseña"];
		$email = $_POST["email"];

	$sql= "INSERT INTO usuario VALUES (	     '$nombre',
											 '$apellido',
											 '$contraseña',
											 '$email'
														)"; 
	//ejecutar
		$ejecutar=mysql_query($sql);
		if(!$ejecutar){
			echo "Tenemos un problema, revisar porfavor";
		}else{ 		      	
			echo "Datos guardados correctamente";
		}

?>
