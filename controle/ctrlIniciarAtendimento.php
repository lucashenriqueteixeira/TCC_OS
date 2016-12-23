<?php
include_once "../classes/Atendimento.php";
include_once "../classes/Auxiliar.php";

$Auxiliar = new Auxiliar();

$Protocolo = $Auxiliar->CriaProtocolo();

$Atendimento= new Atendimento();

    if(isset($_POST["Buscar"])){

        $busca = ($_POST["cpfbusca"] . ($_POST["cnpjbusca"]));
        $Atendimento->setCPFCliente($busca);
        $Atendimento->setNumContaCliente($_POST["numconta"]);


        if($Dados = $Atendimento->BuscarCliente())
        {
            $Dados = $Atendimento->BuscarCliente();

        }else
        {
	
    	   $_SESSION['BuscaInvalida']="Invalido";
        }

}

if (isset($_POST['iniciar'])) {

    date_default_timezone_set("Brazil/East");
    $hora = date("H:i:s", time());
    $data = date("Y-m-d");
    $Atendimento->setNumContaCliente($_POST['id']);
    $Atendimento->setTipoServicoAtendimento($_POST['tipo']);
    $Atendimento->setPrioridadeAtendimento($_POST['prioridade']);
    $Atendimento->setDescServicoAtendimento($_POST['desc']);
    $Atendimento->setOBSAtendimento($_POST['obs']);
    $Atendimento->setDataAberturaAtendimento($data);
    $Atendimento->setHoraAberturaAtendimento($hora);
    $Atendimento->setStatusAtendimento('Em Aberto');

    if($IDProtocolo = $Atendimento->CadastrarAtendimento())
    {

        $_SESSION['sucesso'] = 'true'; 
        $_SESSION['idProtocolo'] = $IDProtocolo;
        ?>

        "<script> location.replace("frmIniciarAtendimento.php"); </script>"
   <?php
    }
}