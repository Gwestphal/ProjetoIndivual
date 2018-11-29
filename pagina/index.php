<?php
include_once 'Pagina.php';

$pagina = new Pagina();
$aPagina = $pagina->recuperarDados();

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

        <?php foreach ($aPagina as $paginas){
            echo "
            <tbody>
                <tr>
                    <td style='width: 175px'><a href='processamento.php?acao=excluir&id_pagina={$paginas['id_pagina']}'class='waves-effect btn red'><i class='material-icons'>delete</i></a>
                        <a href='formulario.php?id_pagina={$paginas['id_pagina']}' class='waves-effect btn light-blue'><i class='material-icons'>create</i></a>
                    </td>
                    <td>{$paginas['nome']}</td>
                    <td>{$paginas['caminho']}</td>
                    <td>{$paginas['publica']}</td>
                </tr>
            </tbody>    
        ";
        } ?>

    </table>

    <a href="../pagina/formulario.php">Voltar para o Formulário</a>
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