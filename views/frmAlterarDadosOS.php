<?php

//vai chamar o cabecalho da pagina
require_once '../layout/cabecalho.php';

    if($_SESSION['id'] == session_id()){
			
			if($_SESSION['cargo'] == "Administrador"){
				
			}
			else{
                            header ('location: ../index.php');
                        }
		}
		
		else{
			header ('location: ../index.php');
		}
?>