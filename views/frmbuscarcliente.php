<title>Busca de Cliente</title>
<?php


//vai chamar o cabecalho da pagina
require_once '../layout/cabecalho.php';

require_once '../classes/Cliente.php';

$Cliente = new Cliente();

if (isset($_GET['busca'])) {
	$DadosCliente = $Cliente->BuscarCliente($_GET['busca']);

}
?>

<!-- Aqui comeca o corpo da imagem -->
<div class='container'>
<h1>Busca Clientes</h1>
<div class='row'>

	<form class="col-xs-4">
		<input class='form-control' maxlenght="100" type='text' name='busca' />
		<br>
		<button class='btn btn-primary btn-info'>Buscar</button>
	</form>
</div>
<br>


<!-- Tabela para resultado da busca -->	
<div class='panel panel-info table-responsive'>
	<table class='table table-bordered'>
		<tr class='bg-info'>
			<td>Nome</td>
			<td>CPF</td>
			<td>Numero cliente</td>
			<td>Sexo</td>
			<td>Alterar dados</td>
		</tr>
		<?php 
		if (isset($_GET['busca'])) :
			
		foreach ($DadosCliente as $Dados) : ?>

		<tr>
			<td><?php echo $Dados->NomeCliente ?></td>
			<td><?php echo $Dados->CPF_CNPJ; ?></td>
			<td><?php echo $Dados->NumeroConta; ?></td>
			<td><?php echo $Dados->SexoCliente; ?></td>
			<td><a href="frmalterardadoscliente.php?id=<?php echo $Dados->NumeroConta ?>"><span class="glyphicon glyphicon-list-alt"></span></td>
		</tr>
		<?php
			endforeach;
			endif;
		?>
	</table>
</div>

</div>

<?php if (isset($_SESSION['Sucesso'])) : ?>

	<script type="text/javascript">
		swal({
		title: "Sucesso",
		text: "O Profissional: <?php echo $_SESSION['NomeAlterado']; ?> foi alterado com sucesso!",
		type: "success",
		confirmButtonText: "Fechar",
		allowEscapeKey: true
		});
	</script>

	<?php
		//destroi a super global para nao ficar mostrando a mensagem toda hora, mesmo atualizando a pagina
		unset($_SESSION['NomeFuncinario']);
		unset($_SESSION['NomeCadastrado']);
		
		endif;

		########### Fim da mensagem de confirmação
	?>

	
<br>
<span><center class='alert alert-info'>Criado e desenvolvido por Lucas Henrique, Estevão Marlon, Pablo, Gustavo e Anderson</center></span>