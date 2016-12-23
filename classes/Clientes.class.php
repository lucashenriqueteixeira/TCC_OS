<?php
namespace classes;
class Clientes
{
    //atributos
    private $IdClientes;
    private $IdEndereco;
    private $NomeCliente;
    private $DTNCliente;
    private $Ativo;
    
    //conta do cliente
    private $NumeroCliente;
    private $CPFCliente;
    private $TelefoneCliente;
    private $SexoCliente;

    public function getIdClientes()
    {
        return $this->IdClientes;
    }

    public function setIdClientes($IdClientes)
    {
        $this->IdClientes = $IdClientes;
        return $this;
    }

    public function getIdEndereco()
    {
        return $this->IdEndereco;
    }

    public function setIdEndereco($IdEndereco)
    {
        $this->IdEndereco = $IdEndereco;
        return $this;
    }

    public function getNomeCliente()
    {
        return $this->NomeCliente;
    }

    public function setNomeCliente($NomeCliente)
    {
        $this->NomeCliente = $NomeCliente;
        return $this;
    }

    public function getDTNCliente()
    {
        return $this->DTNCliente;
    }

    public function setDTNCliente($DTNCliente)
    {
        $this->DTNCliente = $DTNCliente;
        return $this;
    }

    public function getAtivo()
    {
        return $this->Ativo;
    }

    public function setAtivo($Ativo)
    {
        $this->Ativo = $Ativo;
        return $this;
    }

    public function getNumeroCliente()
    {
        return $this->NumeroCliente;
    }

    public function setNumeroCliente($NumeroCliente)
    {
        $this->NumeroCliente = $NumeroCliente;
        return $this;
    }

    public function getCPFCliente()
    {
        return $this->CPFCliente;
    }

    public function setCPFCliente($CPFCliente)
    {
        $this->CPFCliente = $CPFCliente;
        return $this;
    }

    public function getTelefoneCliente()
    {
        return $this->TelefoneCliente;
    }

    public function setTelefoneCliente($TelefoneCliente)
    {
        $this->TelefoneCliente = $TelefoneCliente;
        return $this;
    }

    public function getSexoCliente()
    {
        return $this->SexoCliente;
    }

    public function setSexoCliente($SexoCliente)
    {
        $this->SexoCliente = $SexoCliente;
        return $this;
    }
 
    
    
}