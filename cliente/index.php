<?php
include_once 'Cliente.php';

$cliente = new Cliente();
$arCliente = $cliente->recuperarDados();

include_once '../cabecalho.php';
?>

    <h4 class="center">Clientes</h4>

    <table class="highlight centered">
            <thead>
            <tr>
                <th>Ações</th>
                <th>Nome</th>
                <th>Data Nascimento</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>CNH</th>
                <th>CEP</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>UF</th>
                <th>Email</th>
            </tr>
            </thead>

        <?php foreach ($arCliente as $cliente){
            echo "
            <tbody>
                <tr>
                    <td style='width: 175px'><a href='processamento.php?acao=excluir&idcliente={$cliente['idcliente']}' class='waves-effect btn red'><i class='material-icons'>delete</i></a>
                        <a href='formulario.php?idcliente={$cliente['idcliente']}' class='waves-effect btn light-blue'><i class='material-icons'>create</i></a>
                    </td>
                    <td>{$cliente['nome']}</td>
                    <td>{$cliente['nascimento']}</td>
                    <td>{$cliente['telefone']}</td>
                    <td>{$cliente['cpf']}</td>
                    <td>{$cliente['cnh']}</td>
                    <td>{$cliente['cep']}</td>
                    <td>{$cliente['endereco']}</td>
                    <td>{$cliente['bairro']}</td>
                    <td>{$cliente['cidade']}</td>
                    <td>{$cliente['uf']}</td>
                    <td>{$cliente['email']}</td>
                </tr>
            </tbody>    
        ";
        } ?>

    </table>
    <br>
        <div>
            <a href="formulario.php" class="waves-effect btn green center">Voltar Ao Formulário</a>
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