<?php

//vai chamar o cabecalho da pagina
require_once '../layout/cabecalho.php';

//include do controller
require_once '../controle/ctrlListarAtendimento.php';
?>
<div class="container">

<!-- Formulario para parametros da busca do atendimento -->
<form method="POST" action="">

	<div class='row  form-group-sm'>

			<div class="col-xs-2">
				<label>Numero de Conta</label>
				<input class='form-control' name='conta' type='text' />
			</div>
			
			
		</div>
			<button class="btn btn-primary" name="busca">Buscar</button>

		</div>
	</div>
<! -- /fim do formulario -->

<div class="container">
	
	<h1>Lista de Atendimento</h1>

	<div class="">
		<table class="table table-bordered table-responsive">
			<tr class="bg-info">
				<td>Protocolo</td>
				<td>Numero da conta</td>
				<td>Nome</td>
				<td>CPF ou CNPJ</td>
				<td>status</td>
				<td>logradouro</td>
				<td>UF</td>
				<td>Cidade</td>
				<td>Bairro</td>
				<td>prioridade</td>
				<td>Detalhes</td>
			<tr>
			<?php if(isset($_POST['busca'])) foreach($Busca as $Valor) : ?>
				<tr>
					<td><?php echo $Valor->ProtocoloAtendimento ?></td>
					<td><?php echo $Valor->NumeroConta ?></td>
					<td><?php echo $Valor->NomeCliente ?></td>
					<td><?php echo $Valor->CPF_CNPJ ?></td>
					<td><?php echo $Valor->StatusAtendimento ?></td>
					<td><?php echo $Valor->Logradouro ?></td>
					<td><?php echo $Valor->UF ?></td>
					<td><?php echo $Valor->Cidade ?></td>
					<td><?php echo $Valor->Bairro ?></td>
					<td><?php echo $Valor->PrioridadeAtendimento ?></td>
					<td><a href="frmDetalhesAtendimento.php?protocolo=<?php echo $Valor->ProtocoloAtendimento ?>"><span class="glyphicon glyphicon-list-alt"></span></td>

				</tr>

			<?php endforeach ?>
		</table>
	</div>
</div>
</form>
</div>


<?php include '../layout/rodape.html' ?>