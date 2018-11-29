<?php
include_once '../cabecalho.php';
 include_once 'Usuario.php';

$usuario = new Usuario();
$aUsuario = $usuario->recuperarDados();
// print_r($aUsuario);die;

?>

    <h4 class="center">Usuários</h4>

    <table class="highlight centered">
        <thead>
        <tr>
            <th>Ações</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Perfil</th>
        </tr>
        </thead>

        <?php foreach ($aUsuario as $usuarios){
            echo "
            <tbody>
                <tr>
                    <td style='width: 175px'><a href='processamento.php?acao=excluir&id_usuario={$usuarios['id_usuario']}'class='waves-effect btn red'><i class='material-icons'>delete</i></a>
                        <a href='formulario.php?id_usuario={$usuarios['id_usuario']}' class='waves-effect btn light-blue'><i class='material-icons'>create</i></a>
                    </td>
                    <td>{$usuarios['nome']}</td>
                    <td>{$usuarios['email']}</td>
                    <td>{$usuarios['senha']}</td>
                </tr>
            </tbody>    
        ";
        } ?>

    </table>

<?php
include_once '../rodape.php';