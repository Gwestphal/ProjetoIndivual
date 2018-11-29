<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
include_once 'Maritimo.php';

$maritimo = new Maritimo();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['idmaritimo'])){
            $maritimo->alterar($_POST);
        } else{
            $maritimo->inserir($_POST, $_FILES);
        }
        break;
    case 'excluir':
        $maritimo->excluir($_GET['idmaritimo']);
        break;

    case 'buscando_placa':
        $existe = $maritimo->existePlaca(($_GET['placa']));
        if ($existe) {
            echo '<div class="alert alert-danger">
                <strong>Atenção</strong>
                <p>A PLACA já existe</p>
            </div>';
        }
        die;
    case 'buscando_renavam':
        $existe = $maritimo->existeRenavam(($_GET['renavam']));
        if ($existe) {
            echo '<div class="alert alert-danger">
                <strong>Atenção</strong>
                <p>O RENAVAM já existe</p>
            </div>';
        }
        die;
    case 'buscando_chassi':
        $existe = $maritimo->existeChassi(($_GET['chassi']));
        if ($existe) {
            echo '<div class="alert alert-danger">
                <strong>Atenção</strong>
                <p>O CHASSI já existe</p>
            </div>';
        }
        die;
}

header('location: indexADM.php');