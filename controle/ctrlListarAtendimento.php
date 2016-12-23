<?php
//controle para realizar a busca de atendimentos
//usando o numero da conta
//e para listar essa busca

include_once '../classes/Atendimento.php';

//verifica se foi postado o conta e executa o codigo
if (isset($_POST['conta'])) {
	
	$Atendimento = new Atendimento();
	
	//passa o valor como paramentro no metodo
	$Busca =  $Atendimento->BuscarAtendimento($_POST['conta']);

}