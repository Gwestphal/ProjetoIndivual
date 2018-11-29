
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
            <th>Nome</th>
            <th>Marca</th>
            <th>Cor/Pintura</th>
            <th>Motor</th>
            <th>Valor R$</th>
            <th>Ano de Fabricação</th>
            <th>KM Rodado</th>
            <th>Foto</th>
        </tr>
        </thead>

        <?php foreach ($arTerrestre as $terrestre){
            echo "
            <tbody>
                    </td>
                    <td>{$terrestre['nome']}</td>
                    <td>{$terrestre['marca']}</td>
                    <td>{$terrestre['cor']}</td>
                    <td>{$terrestre['motor']}</td>
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