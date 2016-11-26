<?php

// Mensagens de Erro
$msg[0] = "Conexão com o banco de dados falhou!";
$msg[1] = "Não foi possível selecionar o banco de dados!";

// Fazendo conexão com o servidor MySQL
$conexao = mysql_pconnect("localhost","root","chady123") or die($msg[0]);

// Selecionando o banco de dados
mysql_select_db("setores", $conexao) or die($msg[1]);

// Inserindo dados
$pisos = $_POST["pisos"];
$terminaltipo = $_POST["tipo"];
$espacos = $_POST["espacos"];

$query = "INSERT INTO terminal VALUES('0', '$pisos', '$terminaltipo', '$espacos', NOW());";
$resultado = mysql_query($query,$conexao) or die("erro ao inserir no banco".mysql_error());
echo "<script type=\"text/javascript\"> alert('Cadastrado com sucesso') </script>";

?>
