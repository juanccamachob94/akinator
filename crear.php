<?php
  require 'conexion.php';

  $nodo = $_POST['nodo'];
  $nombre = $_POST['nombre'];
  $nombreAnt = $_POST['nombreAnt'];
  $caracteristicas = $_POST['caracteristicas'];

  // echo "Nodo: ". $nodo;
  // echo "<br/>";
  // echo "Nombre: ". $nombre;
  // echo "<br/>";
  // echo "Características: ". $caracteristicas;
  // echo "<br/>";
  $numHijoI = $nodo * 2;
  $numHijoD = $nodo * 2 + 1;

  $nombreHijoI = $nombre;
  $nombreHijoD = $nombreAnt;

  $pregunta = $caracteristicas;

  $consulta = "INSERT INTO arbol(nodo, texto, pregunta)VALUES('". $numHijoI ."','". $nombreHijoI ."',FALSE)";
  mysqli_query($enlace, $consulta);

  $consulta = "INSERT INTO arbol(nodo, texto, pregunta)VALUES('". $numHijoD ."','". $nombreHijoD ."',FALSE)";
  mysqli_query($enlace, $consulta);

  $consulta = "UPDATE ARBOL SET TEXTO = '".$pregunta."', pregunta = TRUE WHERE nodo = '". $nodo ."'";
  mysqli_query($enlace, $consulta);

  header('location:index.php');

?>
