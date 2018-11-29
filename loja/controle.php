<?php include_once 'Loja.php';

$loja = new Loja();
$arLojas = $loja->recuperarDados();

include_once '../cabecalho.php';
?>

    <h4 class="center">Lojas</h4>

    <table class="highlight centered">
        <thead>
        <tr>
            <th>Ações</th>
            <th>Razão Social</th>
            <th>CNPJ</th>
            <th>CEP</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>UF</th>
        </tr>
        </thead>

        <?php foreach ($arLojas as $loja){
            echo "
            <tbody>
                <tr>
                    <td style='width: 175px'><a href='processamento.php?acao=excluir&idloja={$loja['idloja']}' class='waves-effect btn red'><i class='material-icons'>delete</i></a>
                        <a href='formulario.php?idloja={$loja['idloja']}' class='waves-effect btn light-blue'><i class='material-icons'>create</i></a>
                    </td>
                    <td>{$loja['razao_social']}</td>
                    <td>{$loja['cnpj']}</td>
                    <td>{$loja['cep']}</td>
                    <td>{$loja['endereco']}</td>
                    <td>{$loja['bairro']}</td>
                    <td>{$loja['cidade']}</td>
                    <td>{$loja['uf']}</td>
                </tr>
            </tbody>    
        ";
        } ?>

    </table>
    <br>
    <div>
        <a href="index.php" class="waves-effect btn green center">Voltar</a>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr class="grey">
<?php include_once '../rodape.php';
?>