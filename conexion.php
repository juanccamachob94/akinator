<?php
  $mysql_host = "localhost";
  $mysql_usuario  = "akinator";
  $mysql_passwd = "shippuden";
  $mysql_db = "akinator";

  $enlace = mysqli_connect($mysql_host, $mysql_usuario, $mysql_passwd, $mysql_db);

  /* test connection */
  if(mysqli_connect_errno()) {
    printf("falla: %s", mysqli_connect_errno());
    exit();
  }

  mysqli_set_charset($enlace, 'utf8');
?>
