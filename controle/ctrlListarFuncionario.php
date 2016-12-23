<?php
/*
* Esse codigo é usado para listar os dados do fucionario
* para imprimir nós inputs, radios e selects
* Para que possa ser realizado os updates
*/
include_once '../classes/Funcionario.php';
include_once '../classes/Auxiliar.php';

$Funcionario = new Funcionario();

$Auxiliar = new Auxiliar();

//passando o id do funcionario via get
// e retornando em array e como objeto
$DadosFuncionario = $Funcionario->ListarFuncionario($_GET['id'])[0];

//Dados pessoais
$Nome = $DadosFuncionario->NomeAtendente;
$CPF = $DadosFuncionario->CPFAtendente;
$DTN = $DadosFuncionario->DTNAtendente;
$Telefone = $DadosFuncionario->TelefoneAtendente;
$Sexo = $DadosFuncionario->SexoAtendente;
$IdFuncionario = $DadosFuncionario->idAtendente;
//convertendo a data para formato br
$DTN = $Auxiliar->DataBR($DadosFuncionario->DTNAtendente);

// Endereço
$IdEndereco = $DadosFuncionario->idEndereco;
$Logradouro = $DadosFuncionario->Logradouro;
$Numero = $DadosFuncionario->NumeroCasa;
$Bairro = $DadosFuncionario->Bairro;
$Cidade = $DadosFuncionario->Cidade;
$UF = $DadosFuncionario->UF;

$Usuario = $DadosFuncionario->LoginAtendente;