<?php
include_once "../classes/Equipe.php";

$cad = new Equipe();
$cad->setNomeEquipe($_POST['nome_da_equipe']);
$cad->setCidadeAtendida($_POST['cidade_atendida']);
$cad->setFunc1($_POST['funcionario1']);
$cad->setFunc2($_POST['funcionario2']);
$cad->setFunc3($_POST['funcionario3']);
$cad->setFunc4($_POST['funcionario4']);
$cade = $cad->CadastrarEquipe();

if($cade){

	$cad->cadFuncEquipe($cade);

	session_start();

	$_SESSION['NomeEquipe'] = $cad->getNomeEquipe();
	$_SESSION['NomeCadastrado'] = $cad->getNomeEquipe();

	header('location:../views/frmCadastrarEquipe.php');

}else{

	echo "deu rui";
	
}