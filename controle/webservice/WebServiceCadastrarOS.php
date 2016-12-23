?php
<?php
	require_once "../../classes/WebService.php";

	//pega o login e senha via GET, pode ser via POST também
	$login = $_GET["login"];
	$senha = $_GET["senha"];
	$senhacripto = MD5($senha.'os');
	$protocolo = $_GET["protocoloatendimento"];
	//$idEquipes = $_GET["idequipe"];

	$equipamentos = $_GET["equipamentos"];
	$obsos = $_GET["obsos"];
	$statusos = $_GET["statusos"];
	$osid = $_GET["osid"]

	date_default_timezone_set("Brazil/East");
	$datafechamento = date("Y-m-d");
	$horafechamento = date("H:i:s", time());
	
	//$idEquipe = $_GET["idEquipe"];
	//instancia objeto
	$daou = new DaoUsuarios();
	
	//imprime o resultado do método da classe DAO que recebeu o email e senha
   	echo $daou->webservicecadastraros($login, $senhacripto, $protocolo, $equipamentos, $obsos, $statusos, $datafechamento, $horafechamento, $osid);