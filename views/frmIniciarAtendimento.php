<?php

//vai chamar o cabecalho da pagina
require_once '../layout/cabecalho.php';
?>

<?php
####### Aqui onde fica a mensagem/modal/popup e confirmação #########
if(isset($_SESSION['sucesso'])) : ?>

    <script type="text/javascript">
        swal({
            title: "Sucesso",
            text: "O Atendimento foi cadastrado com sucesso! \n Protocolo: <?php echo  $_SESSION['idProtocolo'] ?> ",
            type: "success",
            confirmButtonText: "Fechar",
            allowEscapeKey: true
        });
    </script>

    <?php
//destroi a super global para nao ficar mostrando a mensagem toda hora, mesmo atualizando a pagina
    unset($_SESSION['sucesso']);
    unset($_SESSION['idProtocolo']);


endif;

########### Fim da mensagem de confirmação
?>




<?php
    //controller do iniciar atendimento
require_once '../controle/ctrlIniciarAtendimento.php';
?>

<div class="container">

		
		
		<br><br><br>

	<form method="POST">
		<h1>Iniciar atendimento</h1>
		
		<div class="row">
	

			<div class="col-xs-2">
				<label>Numero Conta</label>
				<input type="text" id='' class='form-control' maxlenght="30"  name="numconta" class="for-control" />
			</div>

			<div class="col-xs-3">
				<label>CPF</label>
				<input type="text" id='' class='form-control' maxlenght="30" placeholder='111.111.111.-11' name="cpfbusca" class="for-control" />
			</div>
				
			<div class="col-xs-3">
				<label>CNPJ</label>
				<input type="cnpj" name="cnpjbusca" id="cpf" class='form-control' placeholder='11.111.111/1111-11' name="">
			</div>
			<br>	
			<div class="col-xs-3">
				<button name="Buscar" class="btn btn-primary form-control">Buscar</button>
			</div>
			<br><br><br>
		</div>
	</form>
	<?php if(isset($Dados)) : ?>
	<?php foreach ($Dados as $valores): ?>
	<form>
		<h2>Cadastro de atendimento</h2>

		<!-- Formulario de nome -->
		<br><br>
		<legend><strong>Dados pessoais</strong></legend>

		<br>
		<div class='row'>


			<div class="col-xs-2">
				<label>Numero Conta</label>
				<input value="<?php echo $valores->NumeroConta ?>" class='form-control' name="num" maxlenght="255"  type='text' disabled />
			</div>
			<div class="col-xs-5">
				<label>Nome</label>
				<input value="<?php echo $valores->NomeCliente ?>" class='form-control' name="nome" maxlenght="255" placeholder='Nome completo do cliente' type='text' disabled />
			</div>
				<!-- fim do formulario de nome -->

				<!-- Formulario de CPF e data de nascimento -->
			
			
			<div class="col-xs-3">
				<label>CPF/CNPJ</label>
				<input value="<?php echo $valores->CPF_CNPJ ?>" name ="cnpj" class='form-control' type='text' disabled />
			</div>

			<!-- Formulario para telefone -->
			<div  class="col-xs-2">
				<label>Telefone</label>
				<input type="text" value="<?php echo $valores->TelefoneCliente ?>" class='form-control' id='tel' disabled />
			</div>

		</div>

		<br>
		<legend><strong>Endereço</strong></legend>
			
		<div class="row">

			<!-- =======Formulario de endereço======= -->
			
			<div class="col-xs-2">
				<label>Numero</label>
				<input value="<?php echo $valores->NumeroCasa ?>" type='text' name="numero"  maxlenght="20" class='form-control' disabled>
			</div>
			<div class="col-xs-5">
				<label>Complemento</label>
				<input value="<?php echo $valores->Complemento ?>" type='text' name="complemento" maxlenght="255" class='form-control' disabled>
			</div>
			<div class="col-xs-5">
				<label>Logradouro</label>
				<input value="<?php echo $valores->Logradouro ?>" type='text' name="logradouro" maxlenght="255" class='form-control' disabled>
			</div>
			<div class="col-xs-5">
				<label>Bairro</label>
				<input value="<?php echo $valores->Bairro ?>" type='text' name="bairro" maxlenght="255" class='form-control' disabled>
			</div>
			<br>
			<div class="col-xs-3">
				<label>Cidade</label>
				<input value="<?php echo $valores->Cidade ?>" type='text' name="cidade" maxlenght="255" class='form-control' disabled>
			</div>
				
			<div class="col-xs-2">
				<label>Estado</label>
				<input value="<?php echo $valores->UF ?>" type='text' name="uf" maxlenght="255" class='form-control' disabled>
			</div>
			
			<br><br>
		
			<!-- #############Fim do formularionde endereço ############-->
		</div>
		</form>
		<form action="" method="POST">
		<div class="row">
		<br>
			<fieldset>
				<legend><strong>Dados da chamada</strong></legend>
				
				<input type="hidden" name="id" value="<?php echo $valores->NumeroConta ?>">
				<div class="col-xs-4">
				<label>Tipo de serviço</label>
					<input required="required" type="text" maxlenght="255" name="tipo" class="form-control">
				</div>

				<div class="col-xs-2">
				<label>Prioridade</label>
					<select required="required" name="prioridade" class="form-control">
						<option>Selecione...</option>
						<option required="required" value="1 - ALTA">ALTA</option>
						<option required="required" value="2 - MEDIA">MEDIA</option>
						<option required="required"  value="3 - BAIXA">BAIXA</option>
					</select><br>
				</div>
				
				<div class="col-xs-7">
				<label>Descrição do Serviço</label>
				<textarea required="required" class="form-control" rows="4" name="desc" ></textarea>
				</div>
				<div class="col-xs-5">
				<label>Observação</label>
				<textarea required="required" class="form-control" rows="4" name="obs" ></textarea>
				</div>
			</fieldset>
		</div>
		<br>
		<button name='iniciar' class='btn btn-primary btn-block'>Iniciar</button>

	</form>
</div>

<?php 
endforeach;
endif;
?>
<?php
if (isset($_SESSION['BuscaInvalida'])) : ?>

	<script type="text/javascript">
		swal({
		title: "BUSCA INVÁLIDA",
		text: "O NUMERO DA CONTA DO CLIENTE OU O CPF/CNPJ ESTAO INCORRETOS",
		type: "error",
		confirmButtonText: "Fechar",
		allowEscapeKey: true
		});
	</script>

	<?php
		//destroi a super global para nao ficar mostrando a mensagem toda hora, mesmo atualizando a pagina
		unset($_SESSION['BuscaInvalida']);
		
		
		endif;

		########### Fim da mensagem de confirmação


	?>


<?php include '../layout/rodape.html' ?>