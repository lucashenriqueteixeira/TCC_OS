<?php
include_once "../classes/Cliente.php";
include_once "../classes/Auxiliar.php";

$Cliente = new Cliente();
$Auxiliar = new Auxiliar();

#####  ENDEREÇO #####
$Cliente->setLogradouroCliente($_POST["logradouro"]);
$Cliente->setBairroCliente($_POST["bairro"]);
$Cliente->setCidadeCliente($_POST["cidade"]);
$Cliente->setUFCliente($_POST["uf"]);
$Cliente->setNCCliente($_POST['numero']);
$Cliente->setComplementoCliente($_POST['complemento']);

##### DADOS PESSOAIS #####
$Cliente->setNomeCliente($_POST['nome']);

$Cliente->setCPF_CNPJ($_POST['cpf']);
$Cliente->setSexoCliente($_POST['sexo']);

//faz a conversao da data e seta a data ao mesmo tempo
$Cliente->setDTNCliente($Auxiliar->DataBanco($_POST['dtn']));
$Cliente->setTelefoneCliente($_POST['telefone']);


$ID = $Cliente->CadastrarEndereco();

$Cadastro = $Cliente->CadastrarCliente($ID);

//caso de verdadeiro nós dois cadastros, cria as superglobais
//que ativa a mensagem de sucesso
if ($ID && $Cadastro) {
	
}else
{
	echo "Ocorreu um erro. Contate o administrador do sistema!";
}