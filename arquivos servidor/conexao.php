<?php 
  
  //declaração de variáveis
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $db_name = "PAS";

  //Estabelece conexão com o banco de dados
  $conn = mysqli_connect($servidor, $usuario, $senha, $db_name);

  //permite uso de acentuação
  mysqli_set_charset($conn,"utf8");

?>