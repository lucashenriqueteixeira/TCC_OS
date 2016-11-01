<?php

class Auxiliar {
    /*Atributos
	===============================================
	*/
	private $senhaUsuario;
	
	/*Sobrecargas*/
	
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
		//converte os dados em array separados por '/'
		$Dados = explode('-', $Data);

		//retorna o resultado no formato do banco
		return $DataBR = $Dados[2] . '/' . $Dados[1] . '/' . $Dados[0];

	}

	//converte data br em data banco(eua)
	public function DataBanco($Data)
	{
		$Dados = explode('/', $Data);

		return $DataBR = $Dados[2] . '/' . $Dados[1] . '/' . $Dados[0];

	}


	//Metodos para Criptografa a senha do usuario - MD5
	
	public function criptografarSenha()
	{
		$senhaCripto = MD5($this->senhaUsuario);
		return $senhaCripto;
	}
}
