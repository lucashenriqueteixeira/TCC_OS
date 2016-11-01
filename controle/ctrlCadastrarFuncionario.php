<?php

include_once '/../classes/Funcionario.php';
include_once '/../classes/Auxiliar.php';

	//faz a instancia da classe
	$Funcionario = new Funcionario();
	$Auxiliar = new Auxiliar();

	//define um valor para os atributos da classe Funcionario
	//passando como paramentro os indexs

	//dados pessoais
	$Funcionario->setNomeFuncionario($_POST['nome']);
	$Funcionario->setCPFFuncionario($_POST['cpf']);
	$Funcionario->setSexoFuncionario($_POST['sexo']);
	$Funcionario->setDTNFuncionario($Auxiliar->DataBanco($_POST['dtn']));
	$Funcionario->setTelefoneFuncionario($_POST['telefone']);

	//endereço
	$Funcionario->setLogradouroFuncionario($_POST['logradouro']);
	$Funcionario->setNCFuncionario($_POST['numero']);
	$Funcionario->setBairroFuncionario($_POST['bairro']);
	$Funcionario->setCidadeFuncionario($_POST['cidade']);
	$Funcionario->setUFFuncionario($_POST['uf']);
	
	//login
	$Funcionario->setLoginFuncionario($_POST['login']);
	$Auxiliar->setSenhaUsuario($_POST['senha'] . 'os');
	//Chama o methodo de criptografia e faz a conversao e ao mesmo tempo define um valor para o atributo
	$Funcionario->setSenhaFuncionario($Auxiliar->criptografarSenha());
	
	//faz a execução do do metodo de cadastro de endereco

	$ID = $Funcionario->CadastrarEnderecoFuncionario();
	$Funcionario->setEnderecoIDAtendente($ID);
	
	//usuario e senha e cargo
	$cargo = $_POST['cargo'];
	
	
	if($cargo =="adm"){
		$Funcionario->setCargoFuncionario('Administrador');
		$Funcionario->CadastrarAtendente();
		$Funcionario->CadastrarProfissionalCampo();
	}else if($cargo =="funcionariocampo"){
		$Funcionario->CadastrarProfissionalCampo();
	}else{
		$Funcionario->setCargoFuncionario($cargo);
		$Funcionario->CadastrarAtendente();
	}