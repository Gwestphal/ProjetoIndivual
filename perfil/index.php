<?php
include_once 'Perfil.php';

$perfil = new Perfil();
$aPerfil = $perfil->recuperarDados();

include_once '../cabecalho.php';
?>


    <h4 class="center">Páginas</h4>

    <table class="highlight centered">
        <thead>
        <tr>
            <th>Ações</th>
            <th>Nome</th>
            <th>Caminho</th>
            <th>Pública</th>
        </tr>
        </thead>

        <?php foreach ($aPerfil as $perfis){
            echo "
            <tbody>
                <tr>
                    <td style='width: 175px'><a href='processamento.php?acao=excluir&id_perfil={$perfis['id_perfil']}'class='waves-effect btn red'><i class='material-icons'>delete</i></a>
                        <a href='formulario.php?id_perfil={$perfis['id_perfil']}' class='waves-effect btn light-blue'><i class='material-icons'>create</i></a>
                    </td>
                    <td>{$perfis['nome']}</td>
                </tr>
            </tbody>    
        ";
        } ?>

    </table>

    <a href="../perfil/formulario.php">Voltar para o Formulário</a>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<?php
include_once '../rodape.php';