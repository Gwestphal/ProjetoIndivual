<?php
include_once 'Loja.php';

$loja = new Loja();
$arLojas = $loja->recuperarDados();

include_once '../cabecalho.php';
?>

<div class="container">
    <h4 class="center">Sobre nós</h4>
    <P>Nós estamos no ramo de venda de Automóveis, Aviação e Embarcações, desde 2010,
        somos especializados na venda e manuteções de nossas jóias, para sempre termos grandes negócios para nossos clientes.</P>
    <p>Localização: <?php foreach ($arLojas as $loja){ echo "{$loja['razao_social']}"; }?></p>
    <p>CNPJ: <?php foreach ($arLojas as $loja){ echo "{$loja['cnpj']}"; }?></p>
    <p>CEP: <?php foreach ($arLojas as $loja){ echo "{$loja['cep']}"; }?></p>
    <p>Endereço: <?php foreach ($arLojas as $loja){ echo "{$loja['endereco']}"; }?></p>
    <p>Bairro: <?php foreach ($arLojas as $loja){ echo "{$loja['bairro']}"; }?></p>
    <p>Cidade: <?php foreach ($arLojas as $loja){ echo "{$loja['cidade']}"; }?></p>
    <p>Unidade Federativa: <?php foreach ($arLojas as $loja){ echo "{$loja['uf']}"; }?></p>
    <p>Redes Sociais: @LegendMotorcars</p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <a href="formulario.php">Adicione Nova Loja</a>
    <hr class="grey">
</div>
<?php include_once '../rodape.php';
?>