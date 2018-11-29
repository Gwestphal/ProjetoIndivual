<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
include_once 'Cliente.php';

$cliente = new Cliente();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['idcliente'])){
            $cliente->alterar($_POST);
        } else{
            $cliente->inserir($_POST);
        }
        break;
    case 'excluir':
        $cliente->excluir($_GET['idcliente']);
        break;
    case 'buscando_telefone':
        $existe = $cliente->existeTelefone(($_GET['telefone']));
        if ($existe) {
            echo '<div class="alert alert-danger">
                <strong>Atenção</strong>
                <p>O TELEFONE já existe</p>
            </div>';
        }
        die;
        case 'buscando_cpf':
        $existe = $cliente->existeCpf(($_GET['cpf']));
        if ($existe) {
            echo '<div class="alert alert-danger">
                <strong>Atenção</strong>
                <p>O CPF já existe</p>
            </div>';
        }
        die;
        case 'buscando_cnh':
        $existe = $cliente->existeCnh(($_GET['cnh']));
        if ($existe) {
            echo '<div class="alert alert-danger">
                <strong>Atenção</strong>
                <p>A CNH já existe</p>
            </div>';
        }
        die;
        case 'buscando_email':
        $existe = $cliente->existeEmail(($_GET['email']));
        if ($existe) {
            echo '<div class="alert alert-danger">
                <strong>Atenção</strong>
                <p>O EMAIL já existe</p>
            </div>';
        }
        die;
}

header('location: index.php');