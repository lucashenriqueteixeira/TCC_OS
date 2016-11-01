<?php

//vai chamar o cabecalho da pagina
require_once '../layout/cabecalho.php';

require_once '../controle/ctrllistarcliente.php';

?>

<title>Cadastro de Cliente == <?php echo $Nome ?> </title>

<div class='container'>
	<form method="POST" action='../controle/ctrlalterardadoscliente.php' >
		<h2>Cadastro de Cliente</h2>

		<!-- Formulario de nome -->
		<br><br>
		<legend><strong>Dados pessoais</strong></legend>

		<br>
		<div class='row'>

		<input type="hidden" name="idendereco" value="<?php echo $IdEndereco ?>">
		<input type="hidden" name="idcliente" value="<?php echo  $IdCliente ?>">

			<div class="col-xs-4">
				<label>Nome</label>
				<input class='form-control' name='nome' value="<?php echo $Nome ?>"maxlenght="255" required='required' placeholder='Nome completo do cliente' type='text' />
			</div>
				<!-- fim do formulario de nome -->

				<!-- Formulario de CPF e data de nascimento -->
			
			<div class="col-xs-2">
				<label>CPF</label>
				<input id='cpf' name='cpf' placeholder='111.111.111.-11' value="<?php echo $CPF_CNPJ ?>"   class='form-control' type='text' />
			</div>
			
			<div class="col-xs-2">
				<label>CNPJ</label>
				<input id='cnpj' placeholder='11.111.111/1111-11'  name='cnpj' class='form-control' type='text' />
			</div>
			
			<div class="col-xs-2">
				<label>Data de Nascimento</label>
				<input id='date' name='dtn' value="<?php echo $DTN_BR ?>" placeholder='dd/mm/aaa' required='required'  class='form-control'/>	
			</div>

			<!-- Formulario para telefone -->
			<div  class="col-xs-2">
				<label>Telefone</label>
				<input type="text" name="telefone" value="<?php echo $Telefone ?>" required='required'  class='form-control' id='tel' />
			</div>

		</div>

		<div class="row">

			<!-- radio para tipo de cliente ou funcionario -->
			<div class="col-xs-2">
			<br>
				<label>Tipo de cliente</label>
				<br>
				<input type="radio" name='tipo' required='required'  name="tipo" value="fisico" /> <label> Fisico</label><br>
				<input type="radio" required='required'  name="tipo" value="juritico" /> <label> Juridico</label> 
			</div>
			<!-- fim do formulario de data e CPF -->
			<br>
			<div class="col-xs-2">
				<div class='form-group'>
					<label>Sexo</label><br> <label>
					<input type='radio' required='required' <?php echo $Sexo == 'm' ? 'checked="checked"' : '' ?> name='sexo' value='m' /> Masculino</label><br> <label>
					<input type='radio'	name='sexo' required='required' <?php echo $Sexo == 'f' ? 'checked="checked"' : '' ?>value='m' class='radio-inline' /> Feminino</label>
				</div>
			</div>
				
		</div>

			<!-- =======Formulario de endereço======= -->
			<fieldset class=''>
			<br>
			<legend><strong>Endereço</strong></legend>

			<div class='row'>
			
			<div class="col-xs-3">
				<label>Logradouro</label>
				<input type='text' maxlength="255" value="<?php echo $Logradouro ?>" name='logradouro' required='required' class='form-control'>
			</div>
			
			<div class="col-xs-1">
				<label>Numero</label>
				<input type='text' maxlength="255" value="<?php echo $Numero ?>" name='numero' required='required'  class='form-control'>
			</div>
		
			<div class="col-xs-3">
				<label>Bairro</label>
				<input type='text' maxlength="255" name='bairro' value="<?php echo $Bairro ?>" required='required'  class='form-control'>
			</div>
		
			<div class="col-xs-2">
				<label>Cidade</label>
				<input type='text' maxlength="255" name="cidade" value="<?php echo $Cidade ?>" required='required' class='form-control'>
			</div>
				
				<div class="col-xs-2">
					<label>UF</label>
					<select name='uf' class='form-control'>
						<option>Selecione</option>
						<option value='mg' <?php echo $UF == 'mg' ? 'selected=true' : '' ?>>MG</option>
						<option value='sp' <?php echo $UF == 'sp' ? 'selected=true' : '' ?>>SP</option>
						<option value='rj' <?php echo $UF == 'rj' ? 'selected=true' : '' ?>>RJ</option>
						<option value='ac' <?php echo $UF == 'ac' ? 'selected=true' : '' ?>>AC</option>
						<option value='am' <?php echo $UF == 'am' ? 'selected=true' : '' ?>>AM</option>
					</select>
				</div>
			
			<div class="col-xs-2">
				<label>Complemento</label>
				<input type="text" value="<?php echo $Complemento ?>" name='complemento' class='form-control' maxlength="10" />
			</div>
			</div>
			

			</fieldset>

			<br><br>
		
			<!-- #############Fim do formularionde endereço ############-->
		
		<button class='btn btn-primary btn-block'>Cadastrar</button>
	
	</form>

</div>

<br>
<span><center class='alert alert-info'>Criado e desenvolvido por Lucas Henrique, Estevão Marlon, Pablo, Gustavo e Anderson</center></span>