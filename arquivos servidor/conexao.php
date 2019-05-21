<?php 
 
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $db_name = "PAS";

  $conn = mysqli_connect($servidor, $usuario, $senha, $db_name);
  mysqli_set_charset($conn,"utf8");

?>