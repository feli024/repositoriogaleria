<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diseño Web</title>
      
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> <!--Iconos--> 
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
	<title></title>
</head>
<body>


<?php 



	//Conectamos a la base de datos

	$conectar=mysql_connect('localhost', 'root', 'felipe24');
	//Verificar
	if(!$conectar){
		echo "No se pudo conectar al servidor";
	}else{ 

		$base=mysql_select_db('galeria_practica');
		if(!$base){
			echo "no se encontro la base de datos";
		}
	}
		//Recuperar variables
		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$contraseña = $_POST["contraseña"];
		$email = $_POST["email"];

	$sql= "INSERT INTO usuario VALUES (	     
											 '$nombre',
											 '$apellido',
											 '$contraseña',
											 '$email'
														)"; 
	//ejecutar
		$ejecutar=mysql_query($sql);
		if(!$ejecutar){
			echo "Tenemos un problema, revisar porfavor";
		//}else{ 		      	
			//header('Location:login.registro.php');
		//}
}



require 'login.registro.vista.php';
//header('Location: login.php');

?>



<script src="js/jquery-3.1.1.min.js"></script>    
<script src="js/main.js"></script>
<script src="js/app.js"></script>
</body>
</html>
