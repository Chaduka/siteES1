<?php
// Mensagens de Erro
$msg[0] = "Conexão com o banco de dados falhou!";
$msg[1] = "Não foi possível selecionar o banco de dados!";

// Fazendo conexão com o servidor MySQL
$conexao = mysql_pconnect("localhost","root","chady123") or die($msg[0]);

// Selecionando o banco de dados
mysql_select_db("setores", $conexao) or die($msg[1]);

// Inserindo dados
$lotacao = $_POST["lotacao"];

//Tipos de Veiculos que podem adentrar o estacionamento
if(isset($_POST['categoria'])){
    $listaCheckbox = $_POST['categoria'];

    foreach ($listaCheckbox as $categoria) {
        //Categoria A - Motocicleta, motociclo e similares.
        if($categoria == 'a'){
          $categoria_a = 1;
        }
        //Categoria B - Veiculos menores que 9 lugares, e 3500kg
        elseif($categoria == 'b'){
          $categoria_b = 1;
        }
        //Categoria C - Veiculos de transporte de carga que excede 3500kg
        elseif($categoria == 'c'){
          $categoria_c = 1;
        }
        //Categoria D - Veiculos de tranporte de passageiros que excede 9 lugares
        elseif($categoria == 'd'){
          $categoria_d = 1;
        }
        //Categoria E - Veiculos de carga que tenha 6000kg ou mais
        elseif($categoria == 'e'){
          $categoria_e = 1;
        }
    }
}

//Formas de pagamento do estacionamento
if(isset($_POST['pagamento'])){
  $listaPagamento = $_POST['pagamento'];

  foreach($listaPagamento as $forma){
    if($forma == 'manual'){
      $pagamento_manual = 1;
    }
    //Pagamento automatico - Connect Car / Sem Parar
    elseif($forma == 'auto'){
      $pagamento_auto = 1;
    }
  }
}

$query = "INSERT INTO estacionamento VALUES('0', '$lotacao','$categoria_a','$categoria_b', '$categoria_c', '$categoria_d', '$categoria_e', '$pagamento_manual', '$pagamento_auto');";
$resultado = mysql_query($query,$conexao) or die("erro ao inserir no banco".mysql_error());
echo "<script type=\"text/javascript\"> alert('Cadastrado com sucesso') </script>";

?>
