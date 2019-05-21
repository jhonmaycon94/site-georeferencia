<?php
  
  include_once('conexao.php');	

  //Declaração de variáveis
  $latitude = filter_input(INPUT_POST, 'latitude');
  $longitude = filter_input(INPUT_POST, 'longitude');
  $logradouro = filter_input(INPUT_POST, 'logradouro');
  $numero = filter_input(INPUT_POST, 'numero');
  $bairro = filter_input(INPUT_POST, 'bairro');
  $cep = filter_input(INPUT_POST, 'cep');

  //teste para checar os valores que as variáveis estão recebendo!
  
  /*echo "latitude: $latitude <br>";
  echo "longitude: $longitude <br>";
  echo "rua: $logradouro <br>";
  echo "numero: $numero <br>";
  echo "bairro: $bairro <br>";
  echo "cep: $cep <br>";*/

  $sql_query = "INSERT INTO cadastro_lixo(latitude, longitude, logradouro, numero, bairro, cidade, cep, estado) VALUES ('$latitude','$longitude','$logradouro','$numero','$bairro', 'Estância', '$cep', 'Sergipe')";

  $resultado = mysqli_query($conn, $sql_query);

  if(mysql_insert_id($conn)){
    header("Location: view.php");
  }else{
    header("Location: view.php");
  }
?>