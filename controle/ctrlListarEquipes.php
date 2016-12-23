<?php
#############################################
# Metodo para fazer listagem de funcionarios
# para cadastro de equipes
#############################################


include_once "../classes/Equipe.php";

$listar = new Equipe();
$listagem = $listar->ListarFunc();
$listagemcdd = $listar->ListarCidade();