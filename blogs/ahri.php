<?php
$titulo = "ahri";
$descripcionImg = "ahri is good";
$contenido = "<div>ahri broken</div>";

$descripcion = "ahri";

$rutaDestino = "../img/Ea.png";

$autor = "Yo";

$estado = "CDMX";
?> 
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title><?php echo $titulo ?></title>
      <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  
      <link rel="stylesheet" href="../css/styles.css">
  </head>
  <body>
  
  <header class="header">
  <div class="container">
      <div class="btn-menu">
          <!-- En el index.html -->
<label id="milabel" class="menu-icon-index" for="btn-menu"><i class="fas fa-bars"></i></label>
      </div>
      <div class="logo">
          <a href="index.php">
              <img style="width: 170px" src="" alt="">
          </a>
          <h2>Blog</h2>
  
              </div>
          </div> <!-- contenedor -->
      </header>
      <div class="centrar-texto">
      <br><br><br><br>
          <h1 class="fw-700 centrar-texto"><?php echo $titulo  ?> </h1>
          <div class="contenedor seccion contenido-centrado">
          <br>
           
        </div>
          <img src="<?php echo $rutaDestino ?> " alt="imagen rota">
      </div>
      <br>
          <p><?php echo nl2br($descripcionImg);  ?> </p>
          <br>
          <meta name= "description" content = "<?php echo nl2br($descripcion);  ?>"><?php echo nl2br($descripcion);  ?><br>
      
  
      <main class="contenedor seccion contenido-centrado">
          <div class="resumen-propiedad">
              <p class="precio"><?php echo $autor  ?> </p>
             
          </div><!--.resumen-propiedad-->
  
          <p><?php echo nl2br($contenido);  ?> </p>
          
  
      </main>
  
      <footer class="site-footer seccion">
          <div class="contenedor contenedor-footer">
              <nav class="navegacion">
                  <a href="#">Quiénes somos</a>
                  <a href="#">Contacto</a>
              </nav>
              <p class="copyright">Todos los Derechos Reservados 2023 &copy; </p>
          </div>
      </footer>
  </body>
  </html>