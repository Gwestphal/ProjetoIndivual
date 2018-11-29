<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
session_start();

require_once 'usuario/Usuario.php';

$usuario = new Usuario();

$possuiAcesso = $usuario->possuiAcesso();

if (!$possuiAcesso){
    echo"<script>
                alert('Não Possui Acesso a essa página, Faça o Login como ADMINISTRADOR.');
                window.location.href =('../usuario/login.php');
        </script>";
}

?>

<html>
<head>
    <title>Legend</title>

    <link rel="stylesheet" href="../materialize/css/materialize.css">
    <link rel="shortcut icon" href="../img/logo.png" type="img/x-png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
    <script src="../materialize/js/materialize.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
    <script>
        $(function (){
            $('#nascimento').mask('99/99/9999');
            $('#telefone').mask('(99) 99999-9999');
            $('#cpf').mask('999.999.999-99');
            $('#cnh').mask('99999999999');
            $('#cep').mask('99.999-999');
            $('#cnpj').mask('99999999/9999-99');
        });

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#endereco").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
            }

            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#endereco").val("Buscando");
                        $("#bairro").val("Buscando");
                        $("#cidade").val("Buscando");
                        $("#uf").val("Buscando");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#endereco").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>



</head>
<body>
<?php if (!empty($_SESSION['usuario'])){ ?>
<nav>
    <div class="nav-wrapper grey z-depth-2 col s12 m6 ">
        <a href="../vendas/vendas.php" ><img src="../img/logo.png" width="200px"></a>
        <a href="#" data-activates="menu-mobile" class="button-collapse right"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">

            <li><a href="../cliente/formulario.php"><i class="material-icons right">face</i>Cliente</a></li>
            <li><p><?php echo $_SESSION['usuario']['nome']; ?></p></li>
            <li><a title="Sair" href="../usuario/processamento.php?acao=deslogar" class="red-text"><i class="material-icons right">clear</i></a></li>
        </ul>

        <ul id="menu-mobile" class="side-nav">
            <li><a href="../aviacao/index.php"><i class="material-icons right">flight</i>Aeronaves</a></li>
            <li><a href="../terrestre/index.php"><i class="material-icons right">directions_car</i>Carros</a></li>
            <li><a href="../maritimo/index.php"><i class="material-icons right">directions_boat</i>Embarcações</a></li>
            <li><a href="../cliente/formulario.php"><i class="material-icons right">face</i>Cliente</a></li>
            <li><a href="../loja/index.php">Sobre nós</a></li>

        </ul>
    </div>
</nav>

<?php } ?>