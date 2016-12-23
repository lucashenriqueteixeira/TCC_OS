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
					//remove o formulario como id
					//$("#div1").empty();

					//teste de mensagem
					//alert('deu bom');

					//deixa os campos em branco apos o cadastro
					$("#nome").val("");
					$("#cpf").val("");
					$("#cnpj").val("");
					$("#tel").val("");
					$("#date").val("");
					$("#cidade").val("");
					$("#logradouro").val("");
					$("#dth").val("");
					$("#numero").val("");
					$("#bairro").val("");
					$("#complemento").val("");
					$("#status").html('<script type="text/javascript">swal({title: "Sucesso",text: "O Cliente foi Cadastrado com Sucesso!",	type: "success",confirmButtonText: "Fechar",allowEscapeKey: true});</script>');
					
				

					// Se os dados forem enviados com sucesso
					if ( data == 'OK' ) {
						// Os dados foram enviados
						// Aqui você pode fazer o que quiser


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