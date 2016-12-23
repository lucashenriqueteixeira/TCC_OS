<?php
/*
 * Este codigo serve para listar detalhes da equipe selecionada pelo id da equi
 * usando uma query sql que faz join com as tabelas relacionadas
 */
require_once '../classes/Equipe.php';

$Equipe = new Equipe();

$Detalhes = $Equipe->DetalhesEquipe($_GET['id']);