<?php
include_once "../classes/Atendimento.php";
$Atendimento= new Atendimento();
if(isset($_POST["Buscar"])){

$busca = ($_POST["cpfbusca"] . ($_POST["cnpjbusca"]));
$Atendimento->setCPFCliente($busca);
$Atendimento->setNumContaCliente($_POST["numconta"]);


if($Dados = $Atendimento->BuscarCliente()){
$Dados = $Atendimento->BuscarCliente();
/*
$NomeCliente = $Dados->NomeCliente;
$CPFCNPJ = $Dados->CPF_CNPJ;    
$Telefone = $Dados->TelefoneCliente;
$NumeroCasa = $Dados->NumeroCasa;
$Complemento = $Dados->Complemento;
$Logradouro = $Dados->Logradouro;
$Bairro = $Dados->Bairro;
$Cidade = $Dados->Cidade;
$UF = $Dados->UF;
*/
}else{
	
	$_SESSION['BuscaInvalida']="Invalido";
}

}

if (isset($_POST['iniciar'])) {

date_default_timezone_set("Brazil/East");
$hora=date("H:i");
$data=date("Y/m/d");
$Atendimento->setNumContaCliente($_POST['id']);
$Atendimento->setTipoServicoAtendimento($_POST['tipo']);
$Atendimento->setPrioridadeAtendimento($_POST['prioridade']);
$Atendimento->setDescServicoAtendimento($_POST['desc']);
$Atendimento->setOBSAtendimento($_POST['obs']);
$Atendimento->setDataAberturaAtendimento($hora);
$Atendimento->setHoraAberturaAtendimento($data);

$Atendimento->CadastrarAtendimento();
/*
	private $DataAberturaAtendimento;
    private $HoraAberturaAtendimento;
    private $DataFechamentoAtendimento;
    private $HoraFechamentoAtendimento;
    private $TipoServicoAtendimento;
    private $PrioridadeAtendimento;
    private $DescServicoAtendimento;
    private $OBSAtendimento;
*/
}