<?php

class Auxiliar {
    /*Atributos
	===============================================
	*/
	private $senhaUsuario;
	
	
	
	function getSenhaUsuario()
	{
            return $this->senhaUsuario;
    }

    function setSenhaUsuario($senhaUsuario)
    {
            $this->senhaUsuario = $senhaUsuario;
    }

        	
	/*metodos
	==
         * ===============================================
	*/

	//converte data do banco para data br
	public function DataBR($Data)
	{

		$DataBR = DateTime::createFromFormat('Y-m-d',$Data);

		return $DataBR->format('d/m/Y');
	}

	//converte data br em data banco(eua)
	public function DataBanco($Data)
	{
		$DataBanco = DateTime::createFromFormat('d/m/Y',$Data);
		return $DataBanco->format('Y-m-d');

	}


	//Metodos para Criptografa a senha do usuario - MD5
	
	public function criptografarSenha()
	{
		$senhaCripto = MD5($this->senhaUsuario);
		return $senhaCripto;
	}

	#=============================#
	# Metodo para criar protocolo #
	# Com base na data e hora     #
	#=============================#

	public function CriaProtocolo()
	{
		$ProtocoloDataHora = date("YmdHis");

		//Converte os segundos em milisegundos e concaterna a restante do protocolo
		$ProtocoloDataHora .= date('s') * 1000;

		return $ProtocoloDataHora;
		
	}
}
