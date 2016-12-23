<?php

//icnlude na classe
include_once '../classes/Equipe.php';

//se usuario clicar no botao de busca
if(isset($_POST['busca']))
{
	//instancia classe
	$Equipe = new Equipe();

	//executa metodo de busca e retorna o resultado em um array com objetos
	//assim posso trabalhar com o foreach
	$BuscaEquipe = $Equipe->BuscaEquipe($_POST['nome'],$_POST['cidade']);
}