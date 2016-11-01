<?php
//Script para realizar logout no sistema

//inicia a sessao
session_start();

//verifica se o id é direfente do id da sessao
if($_SESSION['id'] != session_id)
{
	//Arquivo php que ira realizar o logout e redirecionar o usuario para tela de login
	unset($_POST['id']);
	unset($_POST['erro']);
	session_destroy();
	
	//apos destuir as super globais session usuario é redirecionado para tela de login
	header('location:../index.php');
}