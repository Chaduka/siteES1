<?php

// Mensagens de Erro
$msg[0] = "Conexão com o banco de dados falhou!";
$msg[1] = "Não foi possível selecionar o banco de dados!";

// Fazendo conexão com o servidor MySQL
$conexao = mysql_pconnect("localhost","root","chady123") or die($msg[0]);

// Selecionando o banco de dados
mysql_select_db("setores", $conexao) or die($msg[1]);

// Inserindo dados
$nome_terminal = $_POST["nomeTerm"];
$nome_comp = $_POST["nomeComp"];

//Procurando se o nome do terminal existe - cadastrado.

$qtde_espacos = mysql_query("SELECT qtdeEspacos FROM terminal WHERE nome = '$nome_terminal'");
$search_terminal = mysql_query("SELECT * FROM terminal WHERE nome = '$nome_terminal'");
$search_comp = mysql_query("SELECT * FROM espacos WHERE nomeCompania = '$nome_comp'");

//Quantidade de espaco existente no terminal
$row = mysql_fetch_assoc($qtde_espacos);
if($row["qtdeEspacos"] < $_POST["espacoComp"]){
  echo "<script type=\"text/javascript\"> alert('Espaco insuficiente') </script>";
}
else{
  echo 'Espaco suficiente';
}

//Verifica se o terminal esta cadastrado
if(@mysql_num_rows($search_terminal) > 0){
  echo 'Este terminal existe  ';
}
else{
  echo 'Este terminal nao existe';
}

//Verifica se a companhia existe
if(@mysql_num_rows($search_comp) > 0){
  echo 'Esta Compania existe';
}
else{
  echo 'Esta Compania nao existe';
}


//$query = "INSERT INTO espacos VALUES('0','$nome_terminal', '$nome_comp');";
//$resultado = mysql_query($query,$conexao) or die("erro ao inserir no banco".mysql_error());
//echo "<script type=\"text/javascript\"> alert('Cadastrado com sucesso') </script>";

?>
