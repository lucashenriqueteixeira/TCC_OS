<?php
print_r($_REQUEST);
//quando o usuario clicar no botao vai ativar esse if
if(isset($_POST['teste'])) {

    require_once '../classes/Equipe.php';

    $Equipe = new Equipe();

    #Aqui eu vou set atributos da classe
    $Equipe->setCidadeAtendida($_POST['cidade']);
    $Equipe->setNomeEquipe('nome');


    //aqui recebo o id da equipe a ser editada
    $Equipe->EditarEquipe($_POST['$Detalhes->']);

    //Aqui vai passar o id da equipe e update em profissionalCampo.idEquipe;
    $Equipe->EditarProfissionalEquipe($_POST[''], $_POST['']);
}