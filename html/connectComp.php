<?php

// Mensagens de Erro
$msg[0] = "Conexão com o banco de dados falhou!";
$msg[1] = "Não foi possível selecionar o banco de dados!";

// Fazendo conexão com o servidor MySQL
$conexao = mysql_pconnect("localhost","root","chady123") or die($msg[0]);

// Selecionando o banco de dados
mysql_select_db("setores", $conexao) or die($msg[1]);

//Procurando se o nome do terminal existe - cadastrado.
$search_terminal = mysql_query("SELECT * FROM terminal");
$search_comp = mysql_query("SELECT * FROM companiaaerea");
?>
