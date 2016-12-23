<?php
	require_once "../../classes/WebService.php";

	//pega o login e senha via GET, pode ser via POST também
	$login = $_GET["login"];
	$senha = $_GET["senha"];
	$senhacripto = MD5($senha.'os');
	$protocolo = $_GET["protocoloatendimento"];

	date_default_timezone_set("Brazil/East");
	$dataabertura = date("Y-m-d");
	$horaabertura = date("H:i:s", time());

	//instancia objeto
	$daou = new DaoUsuarios();
	
	//imprime o resultado do método da classe DAO que recebeu o email e senha
   	echo $daou->webserviceaceitaros($login, $senhacripto, $protocolo, $dataabertura, $horaabertura);