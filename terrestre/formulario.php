<?php include_once 'Terrrestre.php';

$terrestre = new Terrrestre();


if (!empty($_GET['idterrestre'])) {
    $terrestre->carregarPorId($_GET['idterrestre']);
}

include_once '../cabecalho.php';
?>

    <h4 class="center">Novo Carro/Caminhão/Moto</h4>
    <div class="container">
        <div class="row">
            <form enctype="multipart/form-data" class="col s12" action="processamento.php?acao=salvar" method="post">
                <div id="mensagem_placa"></div>
                <div id="mensagem_renavam"></div>
                <div id="mensagem_chassi"></div>
                <div class="input-field col s12">
                    <input type="hidden" name="idterrestre" value="<?php echo $terrestre->getIdterrestre(); ?>">
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">directions_car</i>
                    <input type="text" id="nome" name="nome" class="validate" placeholder="Nome do Carro/Caminhão/Moto"
                           value="<?php echo $terrestre->getNome(); ?>" required>
                    <label for="nome"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">directions_car</i>
                    <input id="marca" type="tel" name="marca" class="validate"
                           placeholder="Marca do Carro/Caminhão/Moto" value="<?php echo $terrestre->getMarca(); ?>" required>
                    <label for="marca"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">color_lens</i>
                    <input id="cor" type="text" name="cor" class="validate" placeholder="Cor/Pintura"
                           value="<?php echo $terrestre->getCor(); ?>" required>
                    <label for="cor"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">directions_car</i>
                    <input id="motor" type="text" name="motor" class="validate" placeholder="Especificação do Motor"
                           value="<?php echo $terrestre->getMotor(); ?>" required>
                    <label for="motor"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">directions_car</i>
                    <input id="placa" type="text" name="placa" class="validate" placeholder="Placa de Identificação"
                           value="<?php echo $terrestre->getPlaca(); ?>" required>
                    <label for="placa"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">directions_car</i>
                    <input id="renavam" type="text" name="renavam" class="validate" placeholder="Renavam"
                           value="<?php echo $terrestre->getRenavam(); ?>" required>
                    <label for="renavam"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">directions_car</i>
                    <input id="chassi" type="text" name="chassi" class="validate" placeholder="Chassi"
                           value="<?php echo $terrestre->getChassi(); ?>" required>
                    <label for="chassi"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">monetization_on</i>
                    <input id="valor" type="text" name="valor" class="validate" placeholder="Valor do Carro/Caminhão/Moto"
                           value="<?php echo $terrestre->getValor(); ?>" required>
                    <label for="valor"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">date_range</i>
                    <input id="ano" type="text" name="ano" class="validate" placeholder="Ano de Fabricação do Carro/Caminhão/Moto"
                           value="<?php echo $terrestre->getAno(); ?>" required>
                    <label for="ano"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">directions_car</i>
                    <input id="km" type="text" name="km" class="validate" placeholder="KM rodado do Carro/Caminhão/Moto"
                           value="<?php echo $terrestre->getKm(); ?>" required>
                    <label for="km"></label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">photo</i>
                    <input type="file" class="file-field input-field" id="foto" name="foto" value="<?php echo $terrestre->getFoto(); ?>">
                </div>

                <div class="col s12">
                    <button type="submit" class="waves-effect btn green">Salvar</button>
                    <a href="../terrestre/formulario.php" class="waves-effect btn red">Apagar</a>
                    <a href="../terrestre/index.php" class="waves-effect btn blue right">Catálogo</a>
                </div>
            </form>
        </div>
    </div>
    <hr class="grey">
<?php include_once '../rodape.php';?>


<script>
    $(function(){

        $('#placa').change(function () {
            $('#mensagem_placa').load('processamento.php?acao=buscando_placa&' + $('#placa').serialize());
        });

        $('#renavam').change(function () {
            $('#mensagem_renavam').load('processamento.php?acao=buscando_renavam&' + $('#renavam').serialize());
        });

        $('#chassi').change(function () {
            $('#mensagem_chassi').load('processamento.php?acao=buscando_chassi&' + $('#chassi').serialize());
        });

    });
</script>
