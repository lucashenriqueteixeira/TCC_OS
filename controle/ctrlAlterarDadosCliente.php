<?php
include_once '../classes/Cliente.php';
include_once '../classes/Auxiliar.php';

	//faz a instancia da classe
	$Cliente = new Cliente();
	$Auxiliar = new Auxiliar();

	//define um valor para os atributos da classe Funcionario
	//passando como paramentro os indexs

	//dados pessoais
	$Cliente->setNomeCliente($_POST['nome']);
	$Cliente->setCPF_CNPJ($_POST['cpf']);
	$Cliente->setSexoCliente($_POST['sexo']);

	//data praa banco
	$Cliente->setDTNCliente($Auxiliar->DataBanco($_POST['dtn']));
	$Cliente->setTelefoneCliente($_POST['telefone']);

	//endereço
	$Cliente->setLogradouroCliente($_POST['logradouro']);
	$Cliente->setNCCliente($_POST['numero']);
	$Cliente->setBairroCliente($_POST['bairro']);
	$Cliente->setCidadeCliente($_POST['cidade']);
	$Cliente->setUFCliente($_POST['uf']);
	
	//faz a execução do do metodo de cadastro de endereco

	$Dados = $Cliente->AlterarDadosCliente(($_POST["idcliente"]));
	$Dados1 = $Cliente->AlterarDadosCliente($_POST['idendereco']);

	if ($Dados1 && $Dados)
	{
		session_start();

        $_SESSION['Sucesso'] = 'sucesso';
        $_SESSION['NomeAlterado'] = $_POST['nome'];

        header('location:../views/frmListarCliente.php');
	}