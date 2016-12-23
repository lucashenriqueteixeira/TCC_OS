<title>Busca de funcionario</title>
<?php
require_once '../layout/cabecalho.php';
include_once '../classes/Funcionario.php';

if (isset($_POST['buscar'])) {

	$Listar = new Funcionario();
	$ListarFuncionario = $Listar->BuscarAtendente($_POST['nome']);

}

?>


<div class='container'>
	<h1>Busca de funcionarios</h1>
	<br>
	<div class='row'>

		<form method='POST' class="col-xs-4">
			<input class='form-control' placeholder="Nome ou CPF"  name='nome' maxlenght="100" type='text'/>
			<br>
			<input type='submit' value='Buscar' name='buscar' class='btn btn-primary btn-info' />
		</form>
	</div>
	<br>


	<!-- Tabela para resultado da busca -->	
	<div class="panel panel-info table-responsive">
		<table class='table table-bordered'>
			<tr class='bg-info'>
				<td>Nome</td>
				<td>CPF</td>
				<td>Usuario</td>
				<td>Cargo</td>
				<td>Sexo</td>
				<td>Alterar dados</td>
			</tr>
			<?php 
			if (isset($_POST['buscar'])) {
			foreach ($ListarFuncionario as $Lista) :?>
			<tr>
				<td><?php echo $Lista->NomeAtendente ?></td>
				<td><?php echo $Lista->CPFAtendente ?></td>
				<td><?php echo $Lista->LoginAtendente ?></td>
				<td><?php echo $Lista->CargoAtendente ?></td>
				<td><?php echo $Lista->SexoAtendente ?></td>
				<td><a href="frmAlterarDadosFuncionario.php?id=<?php echo $Lista->idAtendente ?>"><span class="glyphicon glyphicon-list-alt"></span></a></td>
			</tr>
			<?php endforeach; } ?>

		</table>
	</div>
	<!-- /end tabela -->
</div>

<?php

	//Daqui para baixo é o codigo do modal de sucesso no update/ alteração dados do funcionario
	if(isset($_SESSION['Sucesso'])): 
?>

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

		endif;

		unset($_SESSION['Sucesso']);
		unset($_SESSION['NomeAlterado']);
	?>

<?php include '../layout/rodape.html'; ?>