<?php
include_once 'Pagina.php';

$pagina = new Pagina();

if (!empty($_GET['id_pagina'])) {
    $pagina->carregarPorId($_GET['id_pagina']);
}

include_once '../perfil/Perfil.php';
$perfis = (new Perfil())->recuperarDados();

include_once '../cabecalho.php';
?>

<div class="panel box-shadow-none content-header">
    <div class="panel-body">
        <div class="col-md-12">
            <h3 class="animated fadeInLeft" style="color: grey">Cadastro de Páginas<i class="fa fa-user"></i></h3>
        </div>
    </div>
</div>

<div class="col-md-offset-1 col-md-10 panel">
    <div id="mensagem"></div>

    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
        <div class="col-md-12">
            <form action="processamento.php?acao=salvar" method="post" class="form-horizontal">

                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="hidden" class="form-text" id="id_pagina" name="id_pagina" required
                           value="<?= $pagina->getIdPagina(); ?>">
                </div>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <label>Nome</label>
                    <input type="text" class="form-text" id="nome" name="nome" required
                           value="<?= $pagina->getNome(); ?>">
                    <span class="bar"></span>
                </div>

                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <label>Caminho</label>
                    <input type="text" class="form-text" id="caminho" name="caminho" required
                           value="<?= $pagina->getCaminho(); ?>">
                    <span class="bar"></span>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="publica" id="publica" value="<?php $pagina->getPublica() ?>">
                    <label class="form-check-label" for="publica">Pública</label>
                </div>

                <hr>

                <fieldset>
                    <legend>Perfis com permissão a esta página</legend>

                    <?php foreach ($perfis as $perfil) { ?>


                        <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" name="id_perfil" id="id_perfil" value="<?php $perfil['id_perfil']; ?>">
                                <label class="form-check-label" for="id_perfil">
                                <?php echo $perfil['nome']; ?>
                            </label>
                        </div>
                    <?php } ?>

                </fieldset>

                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn green">
                            Salvar
                        </button>
                        <a class="btn red" href="index.php"> Voltar</a>
                    </div>
                </div>
                <a href="../pagina/index.php">Mostrar index</a>
            </form>
        </div>
    </div>
</div>

<?php
include_once '../rodape.php'; ?>
