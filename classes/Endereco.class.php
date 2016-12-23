<?php
namespace classes;
class Endereco
{
    private $IdEndereco;
    private $NumeroCasa;
    private $Logradouro;
    private $Bairro;
    private $Cidade;
    private $UF;

    
    //metodos getters e setters
    public function getIdEndereco()
    {
        return $this->IdEndereco;
    }

    public function setIdEndereco($IdEndereco)
    {
        $this->IdEndereco = $IdEndereco;
        return $this;
    }

    public function getNumeroCasa()
    {
        return $this->NumeroCasa;
    }

    public function setNumeroCasa($NumeroCasa)
    {
        $this->NumeroCasa = $NumeroCasa;
        return $this;
    }

    public function getLogradouro()
    {
        return $this->Logradouro;
    }

    public function setLogradouro($Logradouro)
    {
        $this->Logradouro = $Logradouro;
        return $this;
    }

    public function getBairro()
    {
        return $this->Bairro;
    }

    public function setBairro($Bairro)
    {
        $this->Bairro = $Bairro;
        return $this;
    }

    public function getCidade()
    {
        return $this->Cidade;
    }

    public function setCidade($Cidade)
    {
        $this->Cidade = $Cidade;
        return $this;
    }

    public function getUF()
    {
        return $this->UF;
    }

    public function setUF($UF)
    {
        $this->UF = $UF;
        return $this;
    }
 
    
    
}