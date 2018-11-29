<?php
include_once 'Terrrestre.php';

$terrestre = new Terrrestre();
$arTerrestre = $terrestre->recuperarDados();

include_once '../cabecalho.php';
?>

    <h4 class="center">Carros/Caminhões/Motos</h4>

    <table class="highlight centered">
        <thead>
        <tr>
            <th>Ações</th>
            <th>Nome</th>
            <th>Marca</th>
            <th>Cor/Pintura</th>
            <th>Motor</th>
            <th>Placa</th>
            <th>Renavam</th>
            <th>Chassi</th>
            <th>Valor R$</th>
            <th>Ano de Fabricação</th>
            <th>KM Rodado</th>
            <th>Foto</th>
        </tr>
        </thead>

        <?php foreach ($arTerrestre as $terrestre){
            echo "
            <tbody>
                <tr>
                    <td style='width: 175px'><a href='processamento.php?acao=excluir&idterrestre={$terrestre['idterrestre']}' class='waves-effect btn red'><i class='material-icons'>delete</i></a>
                        <a href='formulario.php?idterrestre={$terrestre['idterrestre']}' class='waves-effect btn light-blue'><i class='material-icons'>create</i></a>
                    </td>
                    <td>{$terrestre['nome']}</td>
                    <td>{$terrestre['marca']}</td>
                    <td>{$terrestre['cor']}</td>
                    <td>{$terrestre['motor']}</td>
                    <td>{$terrestre['placa']}</td>
                    <td>{$terrestre['renavam']}</td>
                    <td>{$terrestre['chassi']}</td>
                    <td>{$terrestre['valor']}</td>
                    <td>{$terrestre['ano']}</td>
                    <td>{$terrestre['km']}</td>
                    <td><img width='80px' src='../upload/terrestre/{$terrestre['foto']}'></td>
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