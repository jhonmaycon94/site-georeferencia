<?php
  //inclui a conexão '$conn' do arquivo 'conexão.php'
  include_once('conexao.php');  

  //Declaração de variáveis
  $latitude = filter_input(INPUT_POST, 'latitude');
  $longitude = filter_input(INPUT_POST, 'longitude');
  $logradouro = filter_input(INPUT_POST, 'logradouro');
  $numero = filter_input(INPUT_POST, 'numero');
  $bairro = filter_input(INPUT_POST, 'bairro');
  $cep = filter_input(INPUT_POST, 'cep');
  $descricao = filter_input(INPUT_POST, 'descricao');

  //query para inserir no banco de dados
  $sql_query = "INSERT INTO cadastro_lixo(latitude, longitude, logradouro, numero, bairro, cidade, cep, estado, descricao) VALUES ('$latitude','$longitude','$logradouro','$numero','$bairro', 'Estância', '$cep', 'Sergipe', '$descricao')";
  
  //cadastra query no banco de dados
  $resultado = mysqli_query($conn, $sql_query);

 //redireciona página para view.php
  header('Location: view.php');
?>