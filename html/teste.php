<?php
if(isset($_POST["enviar"])){
    $nome = isset($_POST["nome"]) ? (string) $_POST["nome"] : NULL;
    $prof = isset($_POST["check"]) ? $_POST["check"] : NULL;
    if(!empty($prof) && !empty($nome)){
        $msg = null;
        $msg .= "<b>Nome:</b> " . $nome . "<br/>";
        $msg .= "<b>Já trabalhou como: </b><br/>";
        foreach($prof as $val){
            $msg .= $val . "<br/>";
        }
    }
}
?>
