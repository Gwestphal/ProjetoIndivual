<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
include_once 'Terrrestre.php';

$terrestre = new Terrrestre();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['idterrestre'])){
            $terrestre->alterar($_POST);
        } else{
            // print_r($_FILES);
            // echo '</pre>';die;
            $terrestre->inserir($_POST, $_FILES);
        }
        break;
    case 'excluir':
        $terrestre->excluir($_GET['idterrestre']);
        break;
    case 'buscando_placa':
        $existe = $terrestre->existePlaca(($_GET['placa']));
        if ($existe) {
            echo '<div class="alert alert-danger">
                <strong>Atenção</strong>
                <p>A PLACA já existe</p>
            </div>';
        }
        die;
    case 'buscando_renavam':
        $existe = $terrestre->existeRenavam(($_GET['renavam']));
        if ($existe) {
            echo '<div class="alert alert-danger">
                <strong>Atenção</strong>
                <p>O RENAVAM já existe</p>
            </div>';
        }
        die;
    case 'buscando_chassi':
        $existe = $terrestre->existeChassi(($_GET['chassi']));
        if ($existe) {
            echo '<div class="alert alert-danger">
                <strong>Atenção</strong>
                <p>O CHASSI já existe</p>
            </div>';
        }
        die;    
}

header('location: indexADM.php');