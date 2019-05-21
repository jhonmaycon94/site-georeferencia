<?php
//inclui a conexão '$conn' do arquivo 'conexão.php'
require("conexao.php");

/*{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}*/

//seleciona todas as linhas da tabela 'cadastro_lixo'
$query = "SELECT * FROM cadastro_lixo";
$result = mysqli_query($conn, $query);
if (!$result) {
  die('Invalid query: ' . mysqli_error());
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo "<?xml version='1.0' ?>";
echo '<markers>';
$ind=0;

// Iterate through the rows, printing XML nodes for each
while ($row = mysqli_fetch_assoc($result)){
  
  // Add to XML document node
  echo '<marker ';
  echo 'lat="' . $row['latitude'] . '" ';
  echo 'lng="' . $row['longitude'] . '" ';
  echo 'logradouro="' . $row['logradouro'] . '" ';
  echo 'num="' . $row['numero'] . '" ';
  echo 'bairro="' . $row['bairro'] . '" ';
  echo 'cidade="' . $row['cidade'] . '" ';
  echo 'cep="' . $row['cep'] . '" ';
  echo 'estado="' . $row['estado'] . '" ';
  echo '/>';
  $ind = $ind + 1;
}

// End XML file
echo '</markers>';

?>

