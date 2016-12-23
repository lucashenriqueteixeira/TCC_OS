<?php
namespace classes;
class Equipes
{
    private $IdEquipe;
    private $NomeEquipe;
    private $CidadeAtendida;

    //metodos getters e setters
    public function getIdEquipe()
    {
        return $this->IdEquipe;
    }

    public function setIdEquipe($IdEquipe)
    {
        $this->IdEquipe = $IdEquipe;
        return $this;
    }

    public function getNomeEquipe()
    {
        return $this->NomeEquipe;
    }

    public function setNomeEquipe($NomeEquipe)
    {
        $this->NomeEquipe = $NomeEquipe;
        return $this;
    }

    public function getCidadeAtendida()
    {
        return $this->CidadeAtendida;
    }

    public function setCidadeAtendida($CidadeAtendida)
    {
        $this->CidadeAtendida = $CidadeAtendida;
        return $this;
    }
 
    
    
    
}