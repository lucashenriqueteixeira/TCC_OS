<?php
include_once "../classes/Atendimento.php";

include_once '../classes/OrdemServico.php';

include_once '../classes/Auxiliar.php';

$Atendimento = new Atendimento();

$Dados = $Atendimento->DetalhesAtendimento($_GET['protocolo'])[0];

$ID = $Dados->ProtocoloAtendimento;






//faz a listagem da ordem de servico
$OS = new OrdemServico();


$ListarOS = $OS->ListarOS($ID);



$Auxiliar = new Auxiliar();