<?php

// Mensagens de Erro
$msg[0] = "Conexão com o banco de dados falhou!";
$msg[1] = "Não foi possível selecionar o banco de dados!";

// Fazendo conexão com o servidor MySQL
$conexao = mysql_pconnect("localhost","root","chady123") or die($msg[0]);

// Selecionando o banco de dados
mysql_select_db("setores", $conexao) or die($msg[1]);

// Inserindo dados
$nome = $_POST["nomeTerm"]; //Nome recolhido da entrada do usuario - retornando um id
$nome_terminal = mysql_query("SELECT nome FROM terminal WHERE codTerm = '$nome'"); //Procurando pelo nome através do id
$row = mysql_fetch_assoc($nome_terminal);
$terminal = $row["nome"];

$nome_comp = $_POST["nomeComp"]; //Nome compania
$qtde_espacos = $_POST["espacoComp"]; //Quantidade de espaco compania


$query = "INSERT INTO espacos VALUES('0','$terminal', '$nome_comp','$qtde_espacos','1');";
$resultado = mysql_query($query,$conexao) or die("erro ao inserir no banco".mysql_error());
echo "<script type=\"text/javascript\"> alert('Cadastrado com sucesso') </script>";

?>
