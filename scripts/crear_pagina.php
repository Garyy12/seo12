<?php
include '../php/conexion.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Realizar la conexión a la base de datos
    $conectar;

    // Verificar si la conexión fue exitosa
    if (mysqli_connect_errno()) {
        echo "Error al conectar a la base de datos: " . mysqli_connect_error();
        exit();
    }
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $contenido = $_POST['contenido'];
        $autor = $_POST['autor'];
        $estado = $_POST['estado'];
        $descripcionImg = $_POST['descripcionImg'];
        $keywords = $_POST['keywords'];
        

          // Procesar la imagen
          $nombreArchivo = $_FILES["imagen"]["name"];
          $tipoArchivo = $_FILES["imagen"]["type"];
          $tamanoArchivo = $_FILES["imagen"]["size"];
          $rutaTemporal = $_FILES["imagen"]["tmp_name"];

          // Guardar la imagen en una ubicación específica
          $rutaDestino = "../img/" . $nombreArchivo;
          move_uploaded_file($rutaTemporal, $rutaDestino);

           // Insertar los datos en la base de datos
        $query = "INSERT INTO blogs (titulo, descripcion, contenido, imagen, descripcionImg, keywords,  autor, estado) VALUES ('$titulo', '$descripcion', '$contenido', '$nombreArchivo', '$descripcionImg', '$keywords', '$autor', '$estado')";

        if (mysqli_query($conectar, $query)) {
     
        
      
            
            
           } else {
               echo "Error al guardar los datos: " . mysqli_error($conectar);
           
           }
        
        mysqli_close($conectar);
        
        
    

 
  
  
  function contenido_php($html) {
    // Crear un nuevo objeto DOMDocument
    $dom = new DOMDocument();
    
    // Cargar el HTML
    $dom->loadHTML($html);
    
    // Obtener todos los elementos <p> del HTML
    $parrafos = $dom->getElementsByTagName('p');
    
    // Iterar sobre los elementos <p> y aplicar alguna acción
    foreach ($parrafos as $parrafo) {
      // Obtener el texto dentro del elemento <p>
      $texto = $parrafo->nodeValue;
      
      // Aplicar alguna acción al texto, por ejemplo, imprimirlo
      echo $texto . '<br>';
    }
  }
  
  $nombre_archivo = strtolower(str_replace(' ', '_', $titulo)) . '.php'; // Genera un nombre de archivo basado en el título
  $ruta_carpeta = '../blogs/'; // Especifica la ruta de la carpeta
  
  $ruta_archivo = $ruta_carpeta . $nombre_archivo; // Combina la ruta de la carpeta con el nombre de archivo

  $html = '<?php' . "\n" . '$titulo = "' . $titulo . '";' . "\n" . '$descripcionImg = "' . $descripcionImg . '";' . "\n" . '$contenido = "' . $contenido . '";'. "\n" . '' . "\n" . '$descripcion = "' . $descripcion . '";' . "\n" . '' . "\n" . '$rutaDestino = "' . $rutaDestino . '";' . "\n" . '' . "\n" . '$autor = "' . $autor . '";'  . "\n" . '$keywords = "' . $keywords . '";'. "\n" . '$estado = "' . $estado . '";' . "\n" . '?> 
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
  </html>';
  
  // Crea el archivo de página PHP
  file_put_contents($ruta_archivo, $html);
  
  header ("Location: ../subirBlog.php");
}
?>
