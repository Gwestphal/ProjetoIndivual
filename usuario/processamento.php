<?php
include_once 'Usuario.php';
include_once '../perfil/Perfil.php';

session_start();
$usuario = new Usuario();

switch ($_GET['acao']) {
    case 'salvar':
        if (!empty($_POST['id_usuario'])) {
//            print_r($_POST);die;
            $usuario->alterar($_POST);
        } else {
//            print_r($_POST);die;
            $usuario->inserir($_POST);
        }
    break;
    case 'excluir':
        $usuario->excluir($_GET['id_usuario']);
    break;
    case 'logar':
        $usuario->logar($_POST);
        if (!empty($_SESSION['usuario'])){

            switch ($_SESSION['usuario']['id_perfil']){
                case Perfil::PERFIL_ADMNISTRADOR:
                     header('location: ../vendas/vendas.php');
                     die;
                case Perfil::PERFIL_USUARIO:
                     header('location: ../vendas/vendas.php');
                     die;
                default:
                     header('location: ../vendas/vendas.php');
                     die;

            }
        }

    break;
    case 'deslogar':
        $usuario->deslogar();
        header('location: ../usuario/login.php');
    die;
}

header('location: login.php');