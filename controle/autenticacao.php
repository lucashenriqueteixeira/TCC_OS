<?php 
//import dos arquivos php
include_once 'classes/Funcionario.php'; 
include_once 'classes/Auxiliar.php'; 



   /*Pega os valores passados via Post e carrega nas variaveis*/
   $loginAtendente=$_POST['usuario'];
   $senhaAtendente=$_POST['senha'].'os';

   /*Cria um objeto Auxiliar e chama o Metodo de Criptografia*/
   $Aux= new Auxiliar();
   $Aux->setSenhaUsuario($senhaAtendente);
   $senhaCripto= $Aux->criptografarSenha();

   /*Cria um objeto Usuario*/
   $ObjAtendente= new funcionario();
   //seta os valores da classe
   $ObjAtendente->setLoginFuncionario($loginAtendente);
   $ObjAtendente->setSenhaFuncionario($senhaCripto);

   $dadosAtendente=$ObjAtendente->autenticarAtendente();

  
   //caso retorne um valor do banco executa o if
if ($dadosAtendente)
{
	//inicia a session
	session_start();
  //cria uma super global session com o valor do id da sessao
  $_SESSION['id'] = session_id();
  $_SESSION['nome'] = $dadosAtendente->NomeAtendente;
  $_SESSION['cargo'] = $dadosAtendente->CargoAtendente;
  $_SESSION['idAtendente'] = $dadosAtendente->idAtendente;
  header('location:views/MenuPrincipal.php');

}else{
    //inicia a sessao
    

    //inicia uma super global session com um valor de erro ao acessar
    $_SESSION['erro'] = "<center>Usuario ou senha incorretos</center>";
}