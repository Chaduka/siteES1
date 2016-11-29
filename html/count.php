<?php
// Mensagens de Erro
$msg[0] = "Conexão com o banco de dados falhou!";
$msg[1] = "Não foi possível selecionar o banco de dados!";

// Fazendo conexão com o servidor MySQL
$conexao = mysql_pconnect("localhost","root","chady123") or die($msg[0]);

// Selecionando o banco de dados
mysql_select_db("setores", $conexao) or die($msg[1]);

// Inserindo dados
$result_est = mysql_query("SELECT * FROM estacionamento", $conexao);
$num_rows_est = mysql_num_rows($result_est);

$result_term = mysql_query("SELECT * FROM terminal", $conexao);
$num_rows_term = mysql_num_rows($result_term);

$total = $num_rows_est + $num_rows_term;
?>
