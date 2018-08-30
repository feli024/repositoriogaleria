<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diseño Web</title>
      
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> <!--Iconos--> 
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    
</head>
<body>

    <div class="my-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                  <h1><strong>Todo</strong> MusicandStyles</h1>
                  <div class="mydescripcion">
                  <p>Pagina creada para entretener con Musica.</p>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-form">
        <div class="toggle">
            <span> Crear Cuenta</span>
        </div>
        
        <div class="formulario">
            <h2>Iniciar Sesión</h2>
            <form action="login.php" method="post">

                <input name="nombre" type="text" placeholder="Usuario" required>

                <input name="contraseña" type="password" placeholder="Contraseña" required>
           
                <input type="submit"   value="Iniciar Sesión">
                
            </form>
        </div>

        <?php if(!empty($errores)): ?>
          <div class="error">
            <ul>
              <?php echo $errores; ?>
            </ul>
          </div>
        <?php endif; ?>
      
        
        <div class="formulario">
            <h2>Crea tu Cuenta</h2>
            <form action="conectar.php" method="post">

                <input name="nombre" id="name" type="text" placeholder="Nombre" >

                <input name="apellido" id="lastname" type="text" placeholder="Apellido" >
                
                <input name="contraseña" id="password" type="password" placeholder="Contraseña" >
                
                <input name="email" id="electronico" type="email" placeholder="Correo Electronico" >
                
                <input type="submit"   id="btnSend" value="Registrarse">
            </form>
        </div>

       

    <div class="row">
                 <div class="col-sm-12 mysocial-login">
                    <h3>...ingresa también por:</h3>
                    <div class="mysocial-login-buttons" >
                      <a class="mybtn-social" href="https://es-la.facebook.com/">
                      <i class="fa fa-facebook"></i> Facebook
                      </a>
                      <a class="mybtn-social" href="https://twitter.com/?lang=es">
                      <i class="fa fa-twitter"></i> Twitter
                      </a>
                      <a class="mybtn-social" href="https://www.instagram.com/?hl=es-la">
                      <i class="fa fa-instagram"></i> Instagram
                      </a>
                    </div>
                </div>   
            </div>
<script src="js/jquery-3.1.1.min.js"></script>    
<script src="js/main.js"></script>
<script src="js/app.js"></script>
</body>
</html>