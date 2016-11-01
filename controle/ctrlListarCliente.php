<?php
include_once '../classes/Cliente.php';
include_once '../classes/Auxiliar.php';

$Cliente = new Cliente();

$Auxiliar = new Auxiliar();

//passando o id do funcionario via get
// e retornando em array e como objeto
$DadosCliente = $Cliente->ListarCliente($_GET['id'])[0];

//Dados pessoais
$Nome = $DadosCliente->NomeCliente;
$CPF = $DadosCliente->CPF_CNPJ;
$Telefone = $DadosCliente->TelefoneCliente;
$Sexo = $DadosCliente->SexoCliente;
$IdCliente = $DadosCliente->NumeroConta;

//convertendo a data para formato br
$DTN_BR = $Auxiliar->DataBR($DadosCliente->DTNCliente);

// Endereço
$IdEndereco = $DadosCliente->idEndereco;
$Logradouro = $DadosCliente->Logradouro;
$Numero = $DadosCliente->NumeroCasa;
$Bairro = $DadosCliente->Bairro;
$Cidade = $DadosCliente->Cidade;
$UF = $DadosCliente->UF;
$Complemento = $DadosCliente->Complemento;