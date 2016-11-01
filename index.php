<!--
Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
	-->
<!DOCTYPE html>
<html>
<head>
<?php
session_start();
if(isset($_SESSION['id']))
{
	header('location:views/menuprincipal.php');
}

//verifica se o usuario clicou no botao logar
if(isset($_POST['ok']))
{
	//importa o arquivo php e faz a autenticação
	include_once('controle/autenticacao.php');
}


?>

<title>Login do sistema de gerenciamento</title>
<link href="layout/arquivos_formlogin/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="layout/bootstrap/css/alert.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Simple Login Form,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"/>

<script type="application/x-javascript">
	addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
</script>

<!--webfonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>



<!--inicio de login-->
<h1>Sistema de gerenciamento de OS</h1>
		<div class="login">	
			<div class="ribbon-wrapper h2 ribbon-red">
				<div class="ribbon-front">
					<h2>LOGIN</h2>
				</div>
				<div class="ribbon-edge-topleft2"></div>
				<div class="ribbon-edge-bottomleft"></div>
			</div>
			<!-- ===================================================-->

			<form method="post">
				<ul>
					<li>
						<input type="text" class="text" value="login" name='usuario' onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" ><a  class=" icon user"></a>
					</li>
					 <li>
						<input type="password" value="Password" name='senha' onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><a class=" icon lock"></a>
					</li>
				</ul>

			
			<div class="submit">
				<input type="submit" name='ok' onclick="myFunction()" value="Log in" >
			</div>
			<br>
			<?php 
			//verifica se a session foi criada e  foi inicializada
			if(isset($_SESSION['erro'])) { ?>
			<div class="alert alert-danger">
				<?php
					
					//inprimi o valor da session
					echo $_SESSION['erro'];

					//destroi a Super Global SESSION apos sua execução
					//pois pode ficar aparecendo mesmo apos atualizar a pagina ou acessar ela novamente
					unset($_SESSION['erro']);
				?>
			</div>
			<?php } ?>
		</div> 	

		</form>

<!--start-copyright-->
   		<div class="copy-right">
				<p>Criado e desenvolvido por Lucas, Pablo, Estevão, Anderson</p>
				<p>Versão 0.5 15-19-2016</p>
		</div>

	<!--//end-copyright-->
</body>
</html>