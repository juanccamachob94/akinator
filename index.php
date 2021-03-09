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
      <h2>Pregunta</h2>
      <?php
        require 'conexion.php';

        // node number
        $nodo = 1;

        if(isset($_GET['n'])) {
          $nodo =  $_GET['n'];
        }

        //  next node
        $nodoSi = $nodo * 2;
        $nodoNo = $nodo * 2 + 1;

        $consulta = "SELECT texto, pregunta FROM arbol WHERE nodo = ".$nodo;
        $texto = '';
        $pregunta = true;
        $resultado;
        if($resultado = mysqli_query($enlace, $consulta)) {
          if($resultado->num_rows == 0) {
            echo 'Error, el nodo no existe';
          } else {
            while($fila = mysqli_fetch_row($resultado)) {
              $texto = $fila[0];
              $pregunta = $fila[1];
            }
          }
        }
      ?>


      <?php if($pregunta) { ?>
        <div class="contenedorPregunta">
          <h2>
            <?php
              echo "¿Tu personaje es ". $texto ."?";
            ?>
          </h2>
        </div>
      <?php } else { ?>
        <div class="contenedorPregunta">
          <?php
            echo "<h2>¿Has pensando en ".$texto."?</h2>";
            echo "Texto: ".$texto;
            echo "<br/>";
            echo "Pregunta: ".$pregunta;
          ?>
        </div>
      <?php } ?>
      <div class="contenedorRespuestas">
        <?php
          echo "<a href='respuesta.php?n=".$nodo."&r=1&nom=".$texto."' class='boton'>Sí</a>";
          // echo "<a href='index.php' class='boton'>Sí</a>";
          echo "<a href='respuesta.php?n=".$nodo."&r=0&nom=".$texto."' class='boton'>No</a>";
        ?>
      </div>
    </main>

    <div class="limpiar">
    </div>

    <br/>
    <br/>

    <footer>
      <a href="#">Volver a probar</a>
    </footer>
  </body>
</html>
