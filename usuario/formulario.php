<?php
include_once 'Usuario.php';
include_once '../perfil/Perfil.php';

$usuario = new Usuario();
$perfil = new Perfil();

$arPerfil = $perfil->recuperarDados();

if (!empty($_GET['id_usuario'])) {
    $usuario->carregarPorId($_GET['id_usuario']);
}

include_once '../cabecalho.php';
?>

<div class="container">
    <h4 class="center">Novo Usuário</h4>
    <form action="processamento.php?acao=salvar" method="post">
        <input type="hidden" name="idusuario" value="<?php echo $usuario->getIdUsuario(); ?>">

        <div class="input-field col-s12">
            <i class="material-icons prefix">face</i>
            <input type="text" id="nome" name="nome" class="validate" placeholder="Nome Completo"
                   value="<?php echo $usuario->getNome(); ?>" required>
        </div>

        <div class="input-field col-s12">
            <i class="material-icons prefix">phone</i>
            <input id="email" type="email" name="email" class="validate" placeholder="Email"
                   value="<?php echo $usuario->getEmail(); ?>" required>
        </div>

        <div class="input-field col-s6">
            <i class="material-icons prefix">face</i>
            <input id="senha" type="password" name="senha" class="validate" placeholder="Senha"
                   value="<?php echo $usuario->getSenha(); ?>" required>
        </div>

        <div class="form-group">
            <label for="id_perfiil">Perfil</label>
            <select class="form-control" id="id_perfiil" name="id_perfil">
                <option value="#">Selecione</option>
                <?php
                foreach($arPerfil as $perfil){ ?>
                    <option value="<?= $perfil['id_perfil'] ?>"><?= $perfil['nome']?></option>
                <?php } ?>
            </select>
        </div>

        <div class="col s12">
            <button type="submit" class="waves-effect btn green">Salvar</button>
            <a href="../usuario/formulario.php" class="waves-effect btn red">Apagar</a>
            <a href="../usuario/index.php" class="waves-effect btn blue right">Usuários Cadastrados</a>
        </div>
    </form>
</div>

<br>
<br>
<br>
<br>
<br>
<?php
include_once '../rodape.php'; ?>

