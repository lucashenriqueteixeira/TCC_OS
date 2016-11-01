<!DOCTYPE HTML>
<html>
<head>
<?php
    include_once 'biblioteca.php'; 
    //inicia sessao
    session_start();
    //verifica se global id é igual a id da sessao
    if($_SESSION['id'] == session_id())
    {
        //nao faz nada	
    }else
    {   
        //usuario enviado para fazer logon
       header ('location: ../index.php');
    }
?>
    <meta charset="utf-8">

</head>

<body>

<!-- #####Inicio do menu #### -->

<header class="site-header push">
<!-- cabeçalho do menu -->
    Gerenciador de Ordem de serviço <font class="direita label label-danger ">Usuario: <?php echo $_SESSION['nome'] . ' || Cargo: ' . $_SESSION['cargo']; ?> </font>
<!-- /fim do cabeçalho -->
</header>
        <!-- Pushy Menu -->
        <nav class="pushy pushy-left fontt">
            <ul>
                 <li class="pushy-link"><a href="menuprincipal.php">Inicio</a></li>
                
				<li class="pushy-submenu">
                    <a href="#">Atendimento</a>
                    <ul>
                        <li class="pushy-link"><a href="frmIniciarAtendimento.php">Novo Atendimento</a></li>
                        <li class="pushy-link"><a href="frmListarAtendimento.php">Listar Atendimentos</a></li>
						<li class="pushy-link"><a href="frmAlterarDadosAtendimento.php">Alterar Dados Atendimentos</a></li>
						<li class="pushy-link"><a href="frmListarOS.php">Listar Ordens de servico</a></li>
						<li class="pushy-link"><a href="frmAlterarDadosOS.php">Alterar Dados Ordem de Servico</a></li>
                    </ul>
                </li>
				<li class="pushy-submenu">
                    <a href="#">Cadastro</a>
                    <ul>
                        <li class="pushy-link"><a href="frmCadastrarFuncionario.php">Funcionario</a></li>
                        <li class="pushy-link"><a href="frmCadastrarCliente.php">Cliente</a></li>
                        <li class="pushy-link"><a href="frmCadastrarEquipe.php">Equipe</a></li>
                    </ul>
                </li>
                <li class="pushy-submenu">
                    <a href="#">Consultar Dados</a>
                    <ul>
                        <li class="pushy-link"><a href="frmListarFuncionario.php">Funcionario</a></li>
                        <li class="pushy-link"><a href="frmListarCliente.php">Cliente</a></li>
                        <li class="pushy-link"><a href="frmListarEquipe.php">Equipe</a></li>
                    </ul>
                </li>
                <li class="pushy-link"><a href="#">Sobre</a></li>
                <li class="pushy-link"><a href="../controle/logout.php">Logout</a></li>
                
            </ul>
        </nav>
        <div class="site-overlay"></div>

        <!-- Your Content -->
        <div id="container">
            <!-- Botao menu -->
            <div class="menu-btn">&#9776; Menu</div>

        </div>

        <script src='../layout/dados_menu/js/pushy.js' ></script>

<!-- #####Fim do menu #### -->
</body>
</html>