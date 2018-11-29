<?php
include_once 'Loja.php';

$loja = new Loja();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['idloja'])){
            $loja->alterar($_POST);
        } else{
            $loja->inserir($_POST);
        }
        break;
    case 'excluir':
        $loja->excluir($_GET['idloja']);
        break;
}

header('location: index.php');