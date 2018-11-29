<?php include_once 'Cliente.php';

$cliente = new Cliente();


if (!empty($_GET['idcliente'])) {
    $cliente->carregarPorId($_GET['idcliente']);
}

include_once '../cabecalho.php';
?>

    <h4 class="center">Novo Cliente</h4>
    <div class="container">
        <div class="row">
            <form class="col s12" action="processamento.php?acao=salvar" method="post">
                <div id="mensagem_telefone"></div>
                <div id="mensagem_cpf"></div>
                <div id="mensagem_cnh"></div>
                <div id="mensagem_email"></div>
                <div class="input-field col s12">
                    <input type="hidden" name="idcliente" value="<?php echo $cliente->getIdcliente(); ?>">
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">face</i>
                    <input type="text" id="nome" name="nome" class="validate" placeholder="Nome Completo"
                           value="<?php echo $cliente->getNome(); ?>" required>
                    <label for="nome"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">date_range</i>
                    <input id="nascimento" type="tel" name="nascimento" class="validate"
                           placeholder="Data de Nascimento" value="<?php echo $cliente->getNascimento(); ?>" required>
                    <label for="nascimento"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                    <input id="telefone" type="text" name="telefone" class="validate" placeholder="Telefone"
                           value="<?php echo $cliente->getTelefone(); ?>" required>
                    <label for="telefone"></label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">face</i>
                    <input id="cpf" type="text" name="cpf" class="validate" placeholder="CPF"
                           value="<?php echo $cliente->getCpf(); ?>" required>
                    <label for="cpf"></label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">face</i>
                    <input id="cnh" type="text" name="cnh" class="validate" placeholder="CNH"
                           value="<?php echo $cliente->getCnh(); ?>" required>
                    <label for="cnh"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">explore</i>
                    <input id="cnep" type="text" name="cep" class="validate" placeholder="CEP"
                           value="<?php echo $cliente->getCep(); ?>" required>
                    <label for="cep"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">explore</i>
                    <input id="endereco" type="text" name="endereco" class="validate" placeholder="Endereço"
                           value="<?php echo $cliente->getEndereco(); ?>" required>
                    <label for="endereco"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">explore</i>
                    <input id="bairro" type="text" name="bairro" class="validate" placeholder="Bairro"
                           value="<?php echo $cliente->getBairro(); ?>" required>
                    <label for="bairro"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">explore</i>
                    <input id="cidade" type="text" name="cidade" class="validate" placeholder="Cidade"
                           value="<?php echo $cliente->getCidade(); ?>" required>
                    <label for="cidade"></label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">explore</i>
                    <input id="uf" type="text" name="uf" class="validate" placeholder="UF"
                           value="<?php echo $cliente->getUf(); ?>" required>
                    <label for="uf"></label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" name="email" class="validate" placeholder="Email"
                           value="<?php echo $cliente->getEmail(); ?>" required>
                    <label for="email"></label>
                </div>

                <div class="input-field col s6">
                    <input id="idloja" type="hidden" name="idloja" class="validate" value="3"
                           value="<?php echo $cliente->getIdloja(); ?>" required>
                </div>
                <div class="col s12">
                    <button type="submit" class="waves-effect btn green">Salvar</button>
                    <a href="../cliente/formulario.php" class="waves-effect btn red">Apagar</a>
                    <a href="../cliente/index.php" class="waves-effect btn blue right">Clientes Cadastrados</a>
                </div>
            </form>
        </div>
    </div>
    <hr class="grey">
<?php include_once '../rodape.php';?>

<script>
    $(function(){

        $('#telefone').change(function () {
            $('#mensagem_telefone').load('processamento.php?acao=buscando_telefone&' + $('#telefone').serialize());
        });

        $('#cpf').change(function () {
            $('#mensagem_cpf').load('processamento.php?acao=buscando_cpf&' + $('#cpf').serialize());
        });

        $('#cnh').change(function () {
            $('#mensagem_cnh').load('processamento.php?acao=buscando_cnh&' + $('#cnh').serialize());
        });

        $('#email').change(function () {
            $('#mensagem_email').load('processamento.php?acao=buscando_email&' + $('#email').serialize());
        });

    });
</script>

