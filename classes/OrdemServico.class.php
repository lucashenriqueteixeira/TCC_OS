<?php
namespace classes;
class OrdemServico
{
    private $IdOS;
    private $ProtocoloAtendimentoOS;
    private $IdEquipesOS;
    private $DataAberturaOS;
    private $DataFechamentoOS;
    private $HoraAberturaOS;
    private $HoraFechamentoOS;
    private $EquipementosOS;
    private $ObsOS;
    private $StatusOS;

    
    //metodos Getters e Setters
    public function getIdOS()
    {
        return $this->IdOS;
    }

    public function setIdOS($IdOS)
    {
        $this->IdOS = $IdOS;
        return $this;
    }

    public function getProtocoloAtendimentoOS()
    {
        return $this->ProtocoloAtendimentoOS;
    }

    public function setProtocoloAtendimentoOS($ProtocoloAtendimentoOS)
    {
        $this->ProtocoloAtendimentoOS = $ProtocoloAtendimentoOS;
        return $this;
    }

    public function getIdEquipesOS()
    {
        return $this->IdEquipesOS;
    }

    public function setIdEquipesOS($IdEquipesOS)
    {
        $this->IdEquipesOS = $IdEquipesOS;
        return $this;
    }

    public function getDataAberturaOS()
    {
        return $this->DataAberturaOS;
    }

    public function setDataAberturaOS($DataAberturaOS)
    {
        $this->DataAberturaOS = $DataAberturaOS;
        return $this;
    }

    public function getDataFechamentoOS()
    {
        return $this->DataFechamentoOS;
    }

    public function setDataFechamentoOS($DataFechamentoOS)
    {
        $this->DataFechamentoOS = $DataFechamentoOS;
        return $this;
    }

    public function getHoraAberturaOS()
    {
        return $this->HoraAberturaOS;
    }

    public function setHoraAberturaOS($HoraAberturaOS)
    {
        $this->HoraAberturaOS = $HoraAberturaOS;
        return $this;
    }

    public function getHoraFechamentoOS()
    {
        return $this->HoraFechamentoOS;
    }

    public function setHoraFechamentoOS($HoraFechamentoOS)
    {
        $this->HoraFechamentoOS = $HoraFechamentoOS;
        return $this;
    }

    public function getEquipementosOS()
    {
        return $this->EquipementosOS;
    }

    public function setEquipementosOS($EquipementosOS)
    {
        $this->EquipementosOS = $EquipementosOS;
        return $this;
    }

    public function getObsOS()
    {
        return $this->ObsOS;
    }

    public function setObsOS($ObsOS)
    {
        $this->ObsOS = $ObsOS;
        return $this;
    }

    public function getStatusOS()
    {
        return $this->StatusOS;
    }

    public function setStatusOS($StatusOS)
    {
        $this->StatusOS = $StatusOS;
        return $this;
    }
 
    
    
    
    
}