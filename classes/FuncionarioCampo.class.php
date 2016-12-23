<?php
namespace classes;
class FuncionarioCampo
{
    private $IdFuncionario;
    private $IdEndereco;
    private $IdEquipes;
    private $NomeFuncionario;
    private $CPFFuncionario;
    private $SexoFuncionario;
    private $TelefoneFuncionario;
    private $DTNFuncionario;

    public function getIdFuncionario()
    {
        return $this->IdFuncionario;
    }

    public function setIdFuncionario($IdFuncionario)
    {
        $this->IdFuncionario = $IdFuncionario;
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

    public function getIdEquipes()
    {
        return $this->IdEquipes;
    }

    public function setIdEquipes($IdEquipes)
    {
        $this->IdEquipes = $IdEquipes;
        return $this;
    }

    public function getNomeFuncionario()
    {
        return $this->NomeFuncionario;
    }

    public function setNomeFuncionario($NomeFuncionario)
    {
        $this->NomeFuncionario = $NomeFuncionario;
        return $this;
    }

    public function getCPFFuncionario()
    {
        return $this->CPFFuncionario;
    }

    public function setCPFFuncionario($CPFFuncionario)
    {
        $this->CPFFuncionario = $CPFFuncionario;
        return $this;
    }

    public function getSexoFuncionario()
    {
        return $this->SexoFuncionario;
    }

    public function setSexoFuncionario($SexoFuncionario)
    {
        $this->SexoFuncionario = $SexoFuncionario;
        return $this;
    }

    public function getTelefoneFuncionario()
    {
        return $this->TelefoneFuncionario;
    }

    public function setTelefoneFuncionario($TelefoneFuncionario)
    {
        $this->TelefoneFuncionario = $TelefoneFuncionario;
        return $this;
    }

    public function getDTNFuncionario()
    {
        return $this->DTNFuncionario;
    }

    public function setDTNFuncionario($DTNFuncionario)
    {
        $this->DTNFuncionario = $DTNFuncionario;
        return $this;
    }
 
    
    //metodos getters e setters
    
}