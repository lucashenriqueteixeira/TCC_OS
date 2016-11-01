<title>Cadastro de funcionario</title>

<?php
//vai chamar o cabecalho da pagina
require_once '../layout/cabecalho.php';

####### Aqui onde fica a mensagem/modal/popup e confirmação #########
if (isset($_SESSION['NomeCadastrado'])) : ?>

	<script type="text/javascript">
		swal({
		title: "Sucesso",
		text: "O Profissional: <?php echo $_SESSION['NomeCadastrado']; ?> foi cadastrado com sucesso!",
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

<div class='container'>
	<form id="CadastroFuncionario" method='POST' action='../controle/ctrlCadastrarFuncionario.php' >
		<h2>Cadastro de funcionarios</h2>

		<!-- Formulario de nome -->
		<br><br>
		<legend><strong>Dados pessoais</strong></legend>
		<br>
		<div class='form-group form-group-sm'>
			<label>Nome</label>
			<input class='form-control' name='nome' required="required" maxlength='255' placeholder="Nome completo do funcionario" type='text' />
		</div>
		
		<!-- Formulario de dados pessoais -->
		<div class='row  form-group-sm'>

			<div class="col-xs-2">
				<label>CPF</label>
				<input id='cpf' name='cpf' placeholder='111.111.111.-11' required="required" class='form-control' type='text' />
			</div>
			
			
			<div class="col-xs-2">
				<label>Data de Nascimento</label>
				<input id='date' name='dtn' required="required" placeholder="dd/mm/aaa" class='form-control'/>	
			</div>

			<div  class="col-xs-2">
				<label>Telefone</label>
				<input type="text" name="telefone"class='form-control' required="required" id='tel' />
			</div>

		
			<!-- fim do formulario de data e CPF -->
		
			<div class="col-xs-2">
				<label>Sexo</label><br>
				<label><input type='radio' required="required" name='sexo' value='m' /> Masculino</label><br>
				<label><input type='radio' required="required" name='sexo' value='f' class='radio-inline' /> Feminino</label>
			</div>
		</div>
		<!-- fim do formulario de dados pessoais

		<!-- =======Formulario de endereço======= -->
		<br><br>
		<fieldset class=''>
		<legend>Endereço</legend>
		<div class='row form-group-sm'>
			<div class="col-xs-4">
				<label>Logradouro</label>
				<input type='text' name='logradouro' required="required" maxlength="255" class='form-control'>
			</div>
			<div class="col-xs-2">
				<label>Numero</label>
				<input type='text' id='numero' required="required" name='numero' maxlength="255" class='form-control'>
			</div>
		
			<div class="col-xs-2">
				<label>Bairro</label>
				<input type='text' maxlength="255" name="bairro" required="required" id='numero1' class='form-control'>
			</div>
		
			<div class="col-xs-2">
				<label>Cidade</label>
				<input type='text' maxlength="255" required="required" name="cidade" id='letra' class='form-control'>
			</div>
			<div class="col-xs-2">
			<label>UF</label>
				<select required="required" name="uf" class='form-control'>
					<option>Selecione</option>
					<option value='mg'>MG</option>
					<option value='sp'>SP</option>
					<option value='rj'>RJ</option>
					<option value='ac'>AC</option>
					<option value='am'>AM</option>
				</select>
			</div>
		
		</div>
		</fieldset>
		<!-- #############Fim do formularionde endereço ############-->
		<br><br>
		<fieldset>
		<legend>Acesso</legend>
		
		<div class='form-group form-group-sm'>
			<label>Cargo</label><br>
			<label><input type='radio' name='cargo' required="required" value='Fisico' /> Atendente Fisico</label><br>
			<label><input type='radio' name='cargo' required="required" value='Callcenter' /> Atendente Callcenter</label><br>
			<label><input type='radio' name='cargo' required="required" value='funcionariocampo' class='radio-inline' /> Funcionario de campo</label><br>
			<label><input type='radio' name='cargo' required="required" value='adm' class='radio-inline' /> Administrativo</label><br>
		</div>

		<div>
			<label>Usuario</label>
			<input type='text' name='login' required="required" maxlength="11" class='form-control'>
		</div>
		
		
		<div class='form-group form-group-sm'>
			<label>Senha</label>
			<input type='password' required="required" name="senha" maxlength="11" class='form-control'>
		</div>
		
		</fieldset>

		<button class='btn btn-primary btn-block'>Cadastrar</button>
	</form>

	<br><br>
	<span><center class='alert alert-info'>Criado e desenvolvido por Lucas Henrique, Estevão Marlon, Pablo, Gustavo e Anderson</center></span>



<script type="text/javascript" language="javascript">

// Inicia o jQuery
$(function(){
	$('.CadastroFuncionario').submit(function(){
		
		// O restante virá aqui
		// Inicia o jQuery
$(function(){
 
	// Cria uma variável que vamos utilizar para verificar se o
	// formulário está sendo enviado
	var enviando_formulario = false;
	
	// Captura o evento de submit do formulário
	$('.form_clientes').submit(function(){
		
		// O objeto do formulário
		var obj = this;
		
		// O objeto jQuery do formulário
		var form = $(obj);
		
		// O botão de submit
		var submit_btn = $('.form_clientes :submit');
		
		// O valor do botão de submit
		var submit_btn_text = submit_btn.val();
 
		// Dados do formulário
		var dados = new FormData(obj);
		
		// Retorna o botão de submit ao seu estado natural
		function volta_submit() {
			// Remove o atributo desabilitado
			submit_btn.removeAttr('disabled');
			
			// Retorna o texto padrão do botão
			submit_btn.val(submit_btn_text);
			
			// Retorna o valor original (não estamos mais enviando)
			enviando_formulario = false;
		}
		
		// Não envia o formulário se já tiver algum envio
		if ( ! enviando_formulario  ) {		
		
			// Envia os dados com Ajax
			$.ajax({
				// Antes do envio
				beforeSend: function() {
					// Configura a variável enviando
					enviando_formulario = true;
					
					// Adiciona o atributo desabilitado no botão
					submit_btn.attr('disabled', true);
					
					// Modifica o texto do botão
					submit_btn.val('Enviando...');
					
					// Remove o erro (se existir)
					$('.error').remove();
				}, 
				
				// Captura a URL de envio do form
				url: form.attr('action'),
				
				// Captura o método de envio do form
				type: form.attr('method'),
				
				// Os dados do form
				data: dados,
				
				// Não processa os dados
				processData: false,
				
				// Não faz cache
				cache: false,
				
				// Não checa o tipo de conteúdo
				contentType: false,
				
				// Se enviado com sucesso
				success: function( data ) {	
					volta_submit();
					
					// Se os dados forem enviados com sucesso
					if ( data == 'OK' ) {
						// Os dados foram enviados
						// Aqui você pode fazer o que quiser
						alert('Dados enviados com sucesso');
					} else {
						// Se não, apresenta o erro perto do botão de envio
						submit_btn.before('<p class="error">' + data + '</p>');
					}
				},
				// Se der algum problema
				error: function (request, status, error) {
					// Volta o botão de submit
					volta_submit();
					
					// E alerta o erro
					alert(request.responseText);
				}
			});
		}
		
		// Anula o envio convencional
		return false;
		
	});
});
		// Anula o envio convencional
		return false;
	});
});
</script>




</div>