<title>Alterar Dados do funcionario</title>

<?php
//vai chamar o cabecalho da pagina
require_once '../layout/cabecalho.php';

require_once '../controle/ctrlListarfuncionario.php';

?>

<div class='container'>
	<form method='POST' action='../controle/ctrlAlterarDadosFuncionario.php'>

		<h2>Alterar Dados do funcionarios</h2>

		<!-- Formulario de nome -->
		<br><br>
		<legend><strong>Dados pessoais</strong></legend>
		<br>
		<input type="hidden" name="idFuncionario" value="<?php echo $IdFuncionario; ?> "/>
		<input type="hidden" name="idEndereco" value="<?php echo $IdEndereco; ?>" />

		<div class='form-group'>
			<label>Nome</label>
			<input class='form-control' value="<?php echo $Nome ?>" name='nome' required="required" maxlength='255' placeholder="Nome completo do funcionario" type='text' />
		</div>
		
		<!-- Formulario de dados pessoais -->
		<div class='row'>

			<div class="col-xs-2">
				<label>CPF</label>
				<input id='cpf' name='cpf' value="<?php echo $CPF ?>" placeholder='111.111.111.-11' required="required" class='form-control' type='text' />
			</div>
			
			
			<div class="col-xs-2">
				<label>Data de Nascimento</label>
				<input id='date' name='dtn' value="<?php echo $DTN; ?>" required="required" placeholder="dd/mm/aaa" class='form-control'/>	
			</div>

			<div  class="col-xs-2">
				<label>Telefone</label>
				<input type="text" value="<?php echo $Telefone ?>" name="telefone"class='form-control' required="required" id='tel' />
			</div>

		
			<!-- fim do formulario de data e CPF -->
		
			<div class="col-xs-2">
				<label>Sexo</label><br>
				<label><input type='radio' checked="<?php echo $Sexo == 'm' ? 'checked' : '' ?>" required="required" name='sexo' value='m' class='radio-inline' /> Masculino</label><br>

				<label><input type='radio' <?php echo $Sexo == 'f' ? 'checked="checked"' : '' ?>" required="required" name='sexo' value='f' class='radio-inline' /> Feminino</label>
			</div>
		</div>
		<!-- fim do formulario de dados pessoais

		<!-- =======Formulario de endereço======= -->
		<br><br>
		<fieldset class=''>
		<legend>Endereço</legend>
		<div class='row'>
		<div class="col-xs-4">
			<label>Logradouro</label>
			<input type='text' name='logradouro' value="<?php echo $Logradouro ?>" required="required" maxlength="255" class='form-control'>
		</div>
		<div class="col-xs-2">
			<label>Numero</label>
			<input type='text' id='numero' value="<?php echo $Numero ?>" required="required" name='numero' maxlength="255" class='form-control'>
		</div>
		
		<div class="col-xs-2">
			<label>Bairro</label>
			<input type='text' maxlength="255" value="<?php echo $Bairro ?>" name="bairro" required="required" id='numero1' class='form-control'>
		</div>
		
		<div class="col-xs-2">
			<label>Cidade</label>
			<input type='text' maxlength="255" value="<?php echo $Cidade ?>" required="required" name="cidade" id='letra' class='form-control'>
		</div>
		<div class="col-xs-2">
		
		<label>UF</label>
			<select required="required" name="uf" class='form-control'>
				<option>Selecione</option>			
				<option value='mg' <?php echo $UF == 'mg' ? 'selected="true"' : '' ?>>MG</option>
				<option value='sp' <?php echo $UF == 'sp' ? 'selected="true"' : '' ?>>SP</option>
				<option value='rj' <?php echo $UF == 'rj' ? 'selected="true"' : '' ?>>RJ</option>
				<option value='se' <?php echo $UF == 'Se' ? 'selected="true"' : '' ?>>SE</option>
				<option value='ac' <?php echo $UF == 'ac' ? 'selected="true"' : '' ?>>AC</option>
				<option value='am' <?php echo $UF == 'am' ? 'selected="true"' : '' ?>>AM</option>
			</select>
		</div>
		
		</div>
		</fieldset>
		<!-- #############Fim do formularionde endereço ############-->
		<br><br>
		<fieldset>
		<legend>Acesso</legend>
		
		<div class='form-group'>
			<label>Cargo</label><br>
			<label><input type='radio' name='cargo' required="required" value='Fisico' /> Atendente Fisico</label><br>
			<label><input type='radio' name='cargo' required="required" value='Callcenter' /> Atendente Callcenter</label><br>
			<label><input type='radio' name='cargo' required="required" value='funcionariocampo' class='radio-inline' /> Funcionario de campo</label><br>
			<label><input type='radio' name='cargo' required="required" value='adm' class='radio-inline' /> Administrativo</label><br>
		</div>

		<div>
			<label>Usuario</label>
			<input type='text' value="<?php echo $Usuario ?>" name='login' required="required" maxlength="11" class='form-control'>
		</div>
		
		
		<div class='form-group'>
			<label>Senha</label>
			<input type='password' required="required" name="senha" maxlength="11" class='form-control'>
		</div>
		
		</fieldset>

		<button class='btn btn-primary btn-block'>Alterar</button>
	</form>

</div>


<br>
<span><center class='alert alert-info'>Criado e desenvolvido por Lucas Henrique, Estevão Marlon, Pablo, Gustavo e Anderson</center></span>