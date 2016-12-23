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
  //forço as configurações do php.ini
  //para que possa aceitar o controller da session com os cokkies
  ini_set("session.use_only_cookies","1");
  ini_set("session.use_trans_sid","0");
	//inicia a session
	session_start();

  //define que quando fechar o navegador, destrua a session
  session_set_cookie_params(0,"/",$HTTP_SERVER_VARS["HTTP_HOST"],0);

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