<?php
	require_once "../../classes/WebService.php";
		$login = $_GET["login"];
		$senha = $_GET["senha"];
		

		$senhacripto = MD5($senha.'os');


		$protocolo = $_GET["protocolo"];
		$idos = $_GET["idos"];
		$obs = $_GET["obs"];
		$equipamentos = $_GET["equipamentos"];
		$status = $_GET["status"];

		if($status=="Fechar"){

			$statusos="Concluido";

		}else{
			$statusos="Nao Concluido";
		}

		


		date_default_timezone_set("Brazil/East");
		$datafechamento = date("Y-m-d");
		$horafechamento = date("H:i:s", time());




	    //instancia objeto
		$daou = new DaoUsuarios();
	
		//imprime o resultado do método da classe DAO que recebeu o email e senha
   		echo $daou->webserviceconcluiros($login, $senhacripto, $idos, $obs, $equipamentos, $statusos,$datafechamento,$horafechamento);

   		if($statusos=="Concluido") {
            $daou->fecharAtendimento($protocolo, $datafechamento, $horafechamento);

        }
        else
        {
           $daou->NaoConcluido($protocolo);
        }



        /*
   		}else{
   			$statusa = $daou->descobrirStatus($protocolo);
   			
   			if ($statusa[0]->StatusAtendimento == "Em Andamento"){
   			$daou->attStatus("Atendido em 1nv",$protocolo);

   			}else if($statusa[0]->StatusAtendimento == "Atendido em 1nv"){
   			// set atendido em 2 nivel
			$daou->attStatus("Atendido em 2nv",$protocolo);

   			}else if($statusa[0]->StatusAtendimento == "Atendido em 2nv"){
   			// set atendido em 3 nivel
   			$daou->attStatus("Atendido em 3nv",$protocolo);

   			}else if($statusa[0]->StatusAtendimento == "Atendido em 3nv"){
   			$daou->attStatus("Atendido em 3nv",$protocolo);
   			}
   		}
   		
*/