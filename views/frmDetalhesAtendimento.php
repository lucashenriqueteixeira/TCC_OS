<title>Detalhes de atendimento</title>
<?php

	//vai chamar o cabecalho da pagina
	require_once '../layout/cabecalho.php';

	require_once '../controle/ctrlDetalhesAtendimento.php';

	require_once '../classes/Auxiliar.php';


?>

<div class="container">

		
			<div class="col-xs-4">
				<label>Numero do protocolo</label>
				<input type="text"  class='form-control' name="protocolo" placeholder='Protocolo' disabled value="<?php echo $Dados->ProtocoloAtendimento ?>" />
			</div>
		
		<br><br><br>

		<!-- Formulario de nome -->
		<br><br>
		<legend><strong>Dados pessoais</strong></legend>

		<br>
		<div class='row'>


			<div class="col-xs-2">
				<label>Numero Conta</label>
				<input value="<?php echo $Dados->NumeroConta ?>" class='form-control' name="num" maxlenght="255"  type='text' disabled />
			</div>

			<div class="col-xs-5">
				<label>Nome</label>
				<input value="<?php echo $Dados->NomeCliente ?>" class='form-control' name="nome" maxlenght="255" placeholder='Nome completo do cliente' type='text' disabled />
			</div>
				
			<div class="col-xs-3">
				<label>CPF/CNPJ</label>
				<input value="<?php echo $Dados->CPF_CNPJ ?>" name ="cnpj" class='form-control' type='text' disabled />
			</div>

			<!-- Formulario para telefone -->
			<div  class="col-xs-2">
				<label>Telefone</label>
				<input type="text" value="<?php echo $Dados->TelefoneCliente ?>" class='form-control' id='tel' disabled />
			</div>

		</div>

		<br>
		<legend><strong>Endereço</strong></legend>
			
		<div class="row">

			<!-- =======Formulario de endereço======= -->
			
			<div class="col-xs-2">
				<label>Numero</label>
				<input value="<?php echo $Dados->NumeroCasa ?>" type='text' name="numero"  maxlenght="20" class='form-control' disabled>
			</div>
			<div class="col-xs-5">
				<label>Complemento</label>
				<input value="<?php echo $Dados->Complemento ?>" type='text' name="complemento" maxlenght="255" class='form-control' disabled>
			</div>
			<div class="col-xs-5">
				<label>Logradouro</label>
				<input value="<?php echo $Dados->Logradouro ?>" type='text' name="logradouro" maxlenght="255" class='form-control' disabled>
			</div>
			<div class="col-xs-5">
				<label>Bairro</label>
				<input value="<?php echo $Dados->Bairro ?>" type='text' name="bairro" maxlenght="255" class='form-control' disabled>
			</div>
			<br>
			<div class="col-xs-3">
				<label>Cidade</label>
				<input value="<?php echo $Dados->Cidade ?>" type='text' name="cidade" maxlenght="255" class='form-control' disabled>
			</div>
				
			<div class="col-xs-2">
				<label>Estado</label>
				<input value="<?php echo $Dados->UF ?>" type='text' name="uf" maxlenght="255" class='form-control' disabled>
			</div>
			
			<br><br>
		
			<!-- #############Fim do formularionde endereço ############-->
		</div>
		
		
		<div class="row">
		<br>
			<fieldset>
				<legend><strong>Dados da chamada</strong></legend>
				
				<div class="col-xs-4">
				<label>Tipo de serviço</label>
					<input type="text" maxlenght="255" value="<?php echo $Dados->TipoServicoAtendimento ?>" name="tipo" class="form-control" disabled>	
				</div>

				<div class="col-xs-2">
				<label>Prioridade</label>
					<select name="prioridade" class="form-control" disabled="">
						<option>Selecione...</option>
						<option <?php echo $Dados->PrioridadeAtendimento == '1 - ALTA' ? "selected='true'" : '' ?> value="1 - ALTA">ALTA</option>
						<option <?php echo $Dados->PrioridadeAtendimento == '2 - MEDIA' ? "selected='true'" : '' ?> value="2 - MEDIA">MEDIA</option>
						<option <?php echo $Dados->PrioridadeAtendimento == '3 - BAIXA' ? "selected='true'" : '' ?> value="3 - BAIXA">BAIXA</option>
					</select><br>
				</div>

				<div class="col-xs-2">
					<label>Status</label>
					<input type="text" class="form-control" name="status" value='<?php echo $Dados->StatusAtendimento ?>' disabled>
				</div>

				<div class="col-xs-7">
				<label>Descrição do Serviço</label>
				<textarea class="form-control" rows="4" name="desc" disabled ><?php echo $Dados->DescServico ?></textarea>
				</div>
				<div class="col-xs-5">
				<label>Observação</label>
				<textarea class="form-control" rows="4" name="obs" disabled ><?php echo $Dados->OBSAtendimento ?></textarea>
				</div>
			</fieldset>
		</div>
		
		<div>
			<h2>Historico de ordem de serviços</h2>

			<?php foreach($ListarOS as $key => $Lista) : ?>
				<h3>Ordem de serviço N:<?php echo $key + 1; ?></h3>

				<div class="row" >

				<?php
					//este comando vai trocar um caractere por outro
					//campo observação
					$Observacao = str_replace('<br>',' &#13 ', $Lista->ObsOS);

					//converte palavra por outra
					$Equipamento = str_replace('<br>',' &#13 ', $Lista->Equipamentos );
				?>
					<div class="col-xs-5">
						<label>Observação</label>
						<textarea name='obs'  disabled class='form-control'> <?php echo nl2br($Observacao); ?></textarea>
					</div>

					<div class="col-xs-2">
						<label>Status</label>
						<input type="text" class="form-control" name="status" value='<?php echo $Lista->StatusOS ?>' disabled>
					</div>

					<div class="col-xs-2">
						<label>Hora Abertura</label>
						<input type="text" name="dataabertura" class="form-control" value="<?php echo $Auxiliar->DataBR($Lista->DataAbertura) ?>" disabled/>
					</div>

					<div class="col-xs-2">
						<label>Hora Fechamento</label>
						<input type="text" name="datafechamento" class="form-control" value="<?php echo $Auxiliar->DataBR($Lista->DataFechamento) ?>"  disabled/>
					</div>

				</div>
				<div class="row">
					<div class="col-xs-5">
						<label>Equipamentos</label>
						<textarea name="Equipamentos" disabled class="form-control" style="margin: 0px -57.5px 0px 0px; height: 170px; width: 341px;">
							<?php echo nl2br($Equipamento); ?>

						</textarea>
					</div>
				</div>

			<?php endforeach ?>
		</div>
		<br><br>


</div>



<br>
<span><center class='alert alert-info'>Criado e desenvolvido por Lucas Henrique, Estevão Marlon, Pablo, Gustavo e Anderson</center></span>