<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Akinator</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <header>
      <h1>Akinator</h1>
    </header>

    <main>
      <?php
      require 'conexion.php';

      $nodo = $_GET['n'];
      $respuesta = $_GET['r'];
      $nombre = $_GET['nom'];

      function formularioRespuesta($n, $p, $nom) {
        echo "<div class='contenedorPregunta'>";
        echo "<textarea id='nodo' name='nodo' form='formulario', style='display:none;'>". $n ."</textarea>";
        echo "<textarea id='nombreAnt' name='nombreAnt' form='formulario', style='display:none;'>". $nom ."</textarea>";
        echo "<h2¿En quién habías pensado?</h2>";
        echo "<textarea id='nombre' name='nombre' form='formulario' placeholder='Nombre'></textarea>";
        echo "<h3>¿Qué tiene este personaje que no tenga " . $nom  . "?</h3>";
        echo "<textarea id='caracteristicas' name='caracteristicas' form='formulario' placeholder='Características'></textarea>";
        echo "<form action='crear.php' id='formulario' method='POST'>";
        echo "<button type='submit' name='enviar'>ENVIAR</button>";
        echo "</form>";
        echo "</div>";
      }

      formularioRespuesta($nodo, $respuesta, $nombre);
      ?>
    </main>
  </body>
</html>
