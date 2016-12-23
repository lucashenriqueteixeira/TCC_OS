<?php
	require_once "../../classes/WebService.php";

	//pega o login e senha via GET, pode ser via POST também
	$login = $_GET["login"];
	$senha = $_GET["senha"];
	$senhacripto = MD5($senha.'os');
	
	//$idEquipe = $_GET["idEquipe"];
	//instancia objeto
	$daou = new DaoUsuarios();
	
	//imprime o resultado do método da classe DAO que recebeu o email e senha
   	echo $daou->webservicelistaros($login, $senhacripto);