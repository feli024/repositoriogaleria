<!DOCTYPE html>
<html>
<head>
	<title>
		diseño web
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,
	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/estilos_galeria.css">
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo">Subir Foto</h1>
		</div>
	</header>

<div class="contenedor">
	<form class="formulario" method="post" enctype="multipart/form-data" action="subir.php">

				<label for="foto">Archivo</label>
				<input type="file" class="form-control-file" id="foto" aria-describedby="fileHelp" name="foto">

				<label for="titulo">Titulo de la foto</label>
				<input type="text" id="titulo" name="titulo" >

				<label for="texto">Descripcion:</label>
				<textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>

				<!--<?php //if (isset($error)): ?>
					<p class="error"><?php //echo "$error";  ?></p>
				<?php //endif ?>-->
			
				<button type="submit" id="btnSend"  onclick="getData();" class="submit" name="boton">Subir archivo</button>
	</form>

</div>	
<script src="js/app.js"></script>
</body>
</body>
</html>