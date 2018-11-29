<?php if (!empty($_SESSION['usuario'])){ ?>
<footer class="page-footer grey">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Legend Motorcars</h5>
                <p class="white-text">Venha adquirir seu maior sonho no asfalto, mar e céu; Só aqui você encontra.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="grey-text">Venha!</h5>
                <ul>
                    <li><a class="white-text " href="../usuario/login.php">Login</a></li>
                    <li><a class="white-text " href="../loja/index.php">Sobre Nós</a></li>
                    <li><a class="white-text" href="../pagina/formulario.php">Cadastre a página</a></li>
                    <li><a class="white-text" href="../perfil/formulario.php">Cadastre o perfil</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright grey">
        <div class="container">
            © 2018 Todos os Direitos Reservados
            <a class="white-text text-lighten-4 right" href="vendas.php">Legend Motorcars</a>
        </div>
    </div>
</footer>
</body>
</html>
<?php } ?>