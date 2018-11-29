<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
include_once 'Aviacao.php';

$aviacao = new Aviacao();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['idaviacao'])){
            $aviacao->alterar($_POST);
        } else{
            $aviacao->inserir($_POST, $_FILES);
        }
        break;
    case 'excluir':
        $aviacao->excluir($_GET['idaviacao']);
        break;
    case 'buscando_placa':
        $existe = $aviacao->existePlaca(($_GET['placa']));
        if ($existe) {
            echo '<div class="alert alert-danger">
                <strong>Atenção</strong>
                <p>A PLACA já existe</p>
            </div>';
        }
        die;
    case 'buscando_renavam':
        $existe = $aviacao->existeRenavam(($_GET['renavam']));
        if ($existe) {
            echo '<div class="alert alert-danger">
                <strong>Atenção</strong>
                <p>O RENAVAM já existe</p>
            </div>';
        }
        die;
    case 'buscando_chassi':
        $existe = $aviacao->existeChassi(($_GET['chassi']));
        if ($existe) {
            echo '<div class="alert alert-danger">
                <strong>Atenção</strong>
                <p>O CHASSI já existe</p>
            </div>';
        }
        die;
}

header('location: indexADM.php');