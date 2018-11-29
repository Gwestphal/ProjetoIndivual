<?php
include_once 'Aviacao.php';

$aviacao = new Aviacao();
$arAviacao = $aviacao->recuperarDados();

include_once '../cabecalho.php';
?>

    <h4 class="center">Aviões/Helicópteros</h4>

    <table class="highlight centered">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Marca</th>
            <th>Cor/Pintura</th>
            <th>Motor</th>
            <th>Valor R$</th>
            <th>Ano</th>
            <th>Foto</th>
        </tr>
        </thead>

        <?php foreach ($arAviacao as $aviacao){
            echo "
            <tbody>
                <tr>
                    </td>
                    <td>{$aviacao['nome']}</td>
                    <td>{$aviacao['marca']}</td>
                    <td>{$aviacao['cor']}</td>
                    <td>{$aviacao['motor']}</td>
                    <td>{$aviacao['valor']}</td>
                    <td>{$aviacao['ano']}</td>
                    <td><img width='80px' src='../upload/aviacao/{$aviacao['foto']}'></td>
                </tr>
            </tbody>    
        ";
        } ?>

    </table>
    <br>
    <div>
        <a href="formulario.php" class="waves-effect btn green center">Adicionar a Venda</a>
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