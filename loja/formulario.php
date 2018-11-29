<?php include_once 'Loja.php';

$loja = new Loja();


if (!empty($_GET['idloja'])) {
    $loja->carregarPorId($_GET['idloja']);
}

include_once '../cabecalho.php';
?>

    <h4 class="center">Nova Loja</h4>
    <div class="container">
        <div class="row">
            <form class="col s12" action="processamento.php?acao=salvar" method="post">
                <div class="input-field col s12">
                    <input type="hidden" name="idloja" value="<?php echo $loja->getIdloja(); ?>">
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">store_mall_directory</i>
                    <input type="text" id="razao_social" name="razao_social" class="validate" placeholder="Nome da Loja"
                           value="<?php echo $loja->getRazaoSocial(); ?>" required>
                    <label for="razao_social"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">store_mall_directory</i>
                    <input id="cnpj" type="text" name="cnpj" class="validate"
                           placeholder="CNPJ" value="<?php echo $loja->getCnpj(); ?>" required>
                    <label for="cnpj"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">store_mall_directory</i>
                    <input id="cep" type="text" name="cep" class="validate"
                           placeholder="CEP" value="<?php echo $loja->getCep(); ?>" required>
                    <label for="cep"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">store_mall_directory</i>
                    <input id="endereco" type="text" name="endereco" class="validate" placeholder="Endereco"
                           value="<?php echo $loja->getEndereco(); ?>" required>
                    <label for="endereco"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">store_mall_directory</i>
                    <input id="bairro" type="text" name="bairro" class="validate" placeholder="Bairro"
                           value="<?php echo $loja->getBairro(); ?>" required>
                    <label for="bairro"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">store_mall_directory</i>
                    <input id="cidade" type="text" name="cidade" class="validate" placeholder="Cidade"
                           value="<?php echo $loja->getCidade(); ?>" required>
                    <label for="cidade"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">store_mall_directory</i>
                    <input id="uf" type="text" name="uf" class="validate" placeholder="uf"
                           value="<?php echo $loja->getUf(); ?>" required>
                    <label for="uf"></label>
                </div>
                <div class="input-field col s6">
                    <input id="idaviacao" type="hidden" name="idaviacao" class="validate"
                           value="1">
                    <label for="idaviacao"></label>
                </div>
                <div class="input-field col s6">
                    <input id="idterrestre" type="hidden" name="idterrestre" class="validate"
                           value="1">
                    <label for="idterrestre"></label>
                </div>
                <div class="input-field col s6">
                    <input id="idmaritimo" type="hidden" name="idmaritimo" class="validate"
                           value="1">
                    <label for="idmaritimo"></label>
                </div>
                <div class="col s12">
                    <button type="submit" class="waves-effect btn green">Salvar</button>
                    <a href="../loja/index.php" class="waves-effect btn red">Voltar</a>
                    <a href="../loja/controle.php" class="waves-effect btn blue right">Lojas</a>
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
    <br>
    <hr class="grey">
<?php include_once '../rodape.php';?>

