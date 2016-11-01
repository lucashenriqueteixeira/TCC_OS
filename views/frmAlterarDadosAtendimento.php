<?php
require_once '../layout/cabecalho.php';		
		//verifica se o usuario esta logado;
		
			if($_SESSION['cargo'] == "Administrador"){
				
			}
			else{
                            header ('location: ../index.php');
                        }
		
		
//vai chamar o cabecalho da pagina

?>

<html>
    <head>
        <title></title>
    </head>
    <body>
        
    </body>
</html>