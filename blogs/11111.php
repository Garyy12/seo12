<?php
$titulo = "11111";
$descripcionImg = "1111";
$contenido = "<div>1<a href=" + url + ">1</a></div>";

$descripcion = "1111";

$rutaDestino = "../img/175496196-día-de-prevención-de-desastres-naturales-con-niños-explicando-guía-de-seguridad.jpg";

$autor = "wqw";
$keywords = "Estudios, porque, ing";
$estado = "Tijuana";
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
      
      <br>
          <p><?php echo nl2br($descripcionImg);  ?> </p>
          <br>
          <center><meta name= "description" content = "<?php echo nl2br($descripcion);  ?>"><?php echo nl2br($descripcion);  ?><center><br>
      
  
      <main class="contenedor seccion contenido-centrado">
          <center><meta name= "author" content = "<?php echo nl2br($autor);  ?>"><?php echo nl2br($autor);  ?><center><br>
          <p><?php echo nl2br($contenido);  ?> </p>
          <br>
          <meta name= "keywords" content = "<?php echo nl2br($keywords);  ?>"><?php echo nl2br($keywords);  ?><br>
          </div>
  
      </main>
  
      <footer class="site-footer seccion">
          <div class="contenedor contenedor-footer">
          </div>
      </footer>
  </body>
  </html>