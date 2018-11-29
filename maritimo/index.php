<?php
include_once 'Maritimo.php';

$maritimo = new Maritimo();
$arMaritimo = $maritimo->recuperarDados();

include_once '../cabecalho.php';
?>

    <h4 class="center">Embarcações</h4>

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

        <?php foreach ($arMaritimo as $maritimo){
            echo "
            <tbody>
                <tr>
                    </td>
                    <td>{$maritimo['nome']}</td>
                    <td>{$maritimo['marca']}</td>
                    <td>{$maritimo['cor']}</td>
                    <td>{$maritimo['motor']}</td>
                    <td>{$maritimo['valor']}</td>
                    <td>{$maritimo['ano']}</td>
                    <td><img width='80px' src='../upload/maritimo/{$maritimo['foto']}'></td>
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