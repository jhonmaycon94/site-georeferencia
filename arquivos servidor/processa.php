<?php
  //inclui a conexão '$conn' do arquivo 'conexão.php'
  include_once('conexao.php');

  $name = $_FILES['foto_lixo']['name'];
  $temp = $_FILES['foto_lixo']['tmp_name'];
  $type = $_FILES['foto_lixo']['type'];

  if (($type == "image/jpeg") || ($type == "image/jpg") || ($type == "image/png") || ($type == "image/btmp")){
    move_uploaded_file($temp, "imagens/$name");

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
  }

  else{
    echo "o tipo $type não é um tipo válido! escolha um tipo válido!";
  }
  
?>