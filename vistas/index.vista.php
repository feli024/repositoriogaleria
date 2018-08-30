  <!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,
	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
 	<link rel="stylesheet" href="css/estilos_galeria.css">
	<title>desarrollo web</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo"> Mi Increíble Galería de Album de artistas</h1>
		</div>
	</header>

	<section class="fotos">
		<div class="contenedor">

			<?php foreach($fotos as $foto):?>
				<div class="thumb">
					<a href="foto.php?id=<?php echo $foto['id']; ?>">				<!--ruta base de datos-->
						<img src="archivos/<?php echo $foto['imagen'] ?>" alt="">
					</a>	
				</div>

			<?php endforeach;?>	

	<div class="paginacion">
		<?php if ($pagina_actual > 1): ?>

			<a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda">Pagina Anterior</a>
			<?php endif ?>	
			
				<a class="subir_foto" href="subir.php">Subir foto</a>
		
		<?php if ($total_pagina != $pagina_actual):  ?>
			<a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Pagina Siguiente</a>
			<?php endif ?>	
			<!--	
				<a href="#" class="izquierda">Pagina Anterior</a> 
				<a href="#" class="derecha">Pagina Siguiente</a> -->
			</div>
 		</div>
	</section>
<script src="js/app.js"></script>
</body>
</body>
</html>