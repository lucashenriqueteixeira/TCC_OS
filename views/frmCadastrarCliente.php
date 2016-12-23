<title>Cadastro de Cliente</title>
<?php

//vai chamar o cabecalho da pagina
require_once '../layout/cabecalho.php';

?>
<!-- scrip ajax para carregamento sem refresh -->
<script type="text/javascript" src='../layout/js/ajaxcliente.js' ></script>

<!-- Este codigo é usado para ocutar/mostrar os campos de cpf e cnpj
de acordo com o campo selecionado no radio
.
é usado ajax -->

<script type="text/javascript">
	$(document).ready(function(){
		var $divs = $("#campos > div");
		//mostrando no onload da página
		$divs.hide();
		$( '#' + $("input[name='tipo']:checked").val() ).show('fast');
		//mostrando ao clicar no radio
		$("input[name='tipo']").on('click', function(){
			$divs.hide();
			$( '#' + $(this).val() ).show('fast');
		});
	});
</script>


<title>Cadastro de Cliente</title>

<div id='div1' class='container'>


	<form method="POST" class="form_clientes" action="../controle/ctrlCadastrarCliente.php" id="form_clientes"  >
		<h2>Cadastro de Cliente</h2>
		
		<!-- Formulario de nome -->
		<br><br>
		<legend><strong>Dados pessoais</strong></legend>

		<br>
		<div class='row'>

			<div class="col-xs-4">
				<label>Nome</label>
				<input class='form-control' id='nome' name='nome' maxlenght="255" required='required' placeholder='Nome completo do cliente' type='text' />
			</div>
				<!-- fim do formulario de nome -->

			<!-- Campos para serem ocultos/mostrar -->
			<div id="campos">
				<div id="fisico">
					<div class="col-xs-2">
						<label>CPF</label>
						<input id='cpf' name='cpf' placeholder='111.111.111-11' required='required'  class='form-control' type='text' />
					</div>
				</div>

				<div id="juridico">
					<div class="col-xs-2">
						<label>CNPJ</label>
						<input id='cnpj' placeholder='11.111.111/1111-11' name='cnpj' class='form-control' type='text' />
					</div>
				</div>
			</div>




			<div class="col-xs-2">
				<label>Data de Nascimento</label>
				<input type="text" id='date' name='dtn' placeholder='dd/mm/aaa' required='required'  class='form-control'/>

			</div>

			<!-- Formulario para telefone -->
			<div  class="col-xs-2">
				<label>Telefone</label>
				<input type="text" name="telefone" required='required'  class='form-control' id='tel' />
			</div>

		</div>


		<div class="row">

			<!-- radio para tipo de cliente ou funcionario -->
			<div class="col-xs-2">
			<br>
				<label>Tipo de cliente</label>
				<br>
				<input type="radio" name='tipo' required='required'  value="fisico" /> <label> Fisico</label><br>
				<input type="radio" required='required'  name="tipo"  value="juridico" /> <label> Juridico</label>
			</div>
			<!-- fim do formulario de data e CPF -->
			<br>
			<div class="col-xs-2">
				<div class='form-group'>
					<label>Sexo</label><br> <label>
					<input type='radio' required='required'  name='sexo' value='m' /> Masculino</label><br> <label>
					<input type='radio'	name='sexo' required='required' value='f' class='radio-inline' /> Feminino</label>
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
				<input type='text' maxlength="255" id="logradouro" name='logradouro' required='required' class='form-control'>
			</div>
			
			<div class="col-xs-1">
				<label>Numero</label>
				<input type='text' maxlength="255" name='numero' id="numero" required='required'  class='form-control'>
			</div>
		
			<div class="col-xs-3">
				<label>Bairro</label>
				<input type='text' maxlength="255" name='bairro' id="bairro" required='required'  class='form-control'>
			</div>
		
			<div class="col-xs-2">
				<label>Cidade</label>
				<input type='text' maxlength="255" name="cidade" id="cidade" required='required' class='form-control'>
			</div>
				
				<div class="col-xs-2">
					<label>UF</label>
					<select required='required' name='uf' class='form-control'>
						<option>Selecione</option>
						<option value='mg'>MG</option>
						<option value='sp'>SP</option>
						<option value='rj'>RJ</option>
						<option value='ac'>AC</option>
						<option value='am'>AM</option>
					</select>
				</div>
			
			<div class="col-xs-3">
				<label>Complemento</label>
				<input type="text" name='complemento' required='required'  id="complemento" class='form-control' maxlength="100" />
			</div>
			</div>
			

			</fieldset>

			<br><br>
		
			<!-- #############Fim do formularionde endereço ############-->
		
		<input type="submit" id='salvar' class='btn btn-primary btn-block' value='cadastrar' />
	
	</form>


</div>

<?php include '../layout/rodape.html' ?>