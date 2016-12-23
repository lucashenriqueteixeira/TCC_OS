<title>Buscar Equipe</title>
<?php

//vai chamar o cabecalho da pagina
require_once '../layout/cabecalho.php';

require_once '../controle/ctrlBuscarEquipe.php';
?>
<div class="container">
	<h1>Busca de Equipes</h1>

	<form method="POST">
		<div class="form-group">
			<div class="col-xs-2">
				<label>Nome Da Equipe</label>
				<input type="text" name="nome" class="form-control">
			</div>

			<div class="col-xs-2">
				<label>Cidade Atendida</label>
				<input type="text" name="cidade" class="form-control">
			</div>

		</div>
				
				<br>
				
				<button name="busca" class='btn btn-primary btn-info' >Buscar</button>
				<br>
				<br>

	</form>
	<div>
		<table class="table table-bordered table-responsive">
			<tr class="bg-info">
				<td>Nome Da Equipe</td>
				<td>Cidade Atendida</td>
				<td>Detalhes</td>
			</tr>

			<?php if(isset($_POST['busca'])) : ?>
				<?php foreach($BuscaEquipe as $Valor) : ?>
					<tr>
						<td><?php echo $Valor->NomeEquipe ?></td>
						<td><?php echo $Valor->CidadeAtendida ?></td>
						<td><a href="frmDetalhesEquipe.php?id=<?php echo $Valor->idEquipe ?>"><span class="glyphicon glyphicon-list-alt"></span></a></td>
					</tr>
				<?php endforeach;	 
						endif; ?>
		</table>
	</div>

</div>


<?php include '../layout/rodape.html' ?>