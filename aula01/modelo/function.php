<?php

$NOME = $REQUEST['NOME'];
$ANIMAL = $REQUEST['ANIMAL'];

if (empty($NOME)){
    $dados - array(
        "tipo" => 'error',
        "mensagem" => "Existe(m) campo(s) a ser(em) preenchido(s)."
    );
}else{
    switch($ANIMAL){
        case '1' : $dados = array (
            "tipo" => 'cachorro',
            "mensagem" => 'Seja bem vindo, '.$NOME.', sabemos que o seu animal de preferência é o cachorro'
        );
        break;
        case '2' : $dados = array (
            "tipo" => 'gato',
            "mensagem" => 'Seja bem vindo, '.$NOME.', sabemos que o seu animal de preferência é o cachorro'
        );
        break;
        case '3' : $dados = array (
            "tipo" => 'peixe',
            "mensagem" => 'Seja bem vindo, '.$NOME.', sabemos que o seu animal de preferência é o cachorro'
        );
        break;
    }
}
echo  json_encode($dados);
