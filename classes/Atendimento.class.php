<?php
namespace classes;
class Atendimento
{
    private $ProtocoloAtendimento;
    private $IdCliente;
    private $IdAtendente;
    private $DescAtendimento;
    private $StatusAtendimento;
    private $ObsAtendimento;
    private $DataAberturaAtendimento;
    private $DataFechamentoAtendimento;
    private $HoraFechamentoAtendimento;
    private $HoraAberturaAtendimento;
    private $TipoServicoAtendimento;
    private $PrioridadeAtendimento;

    public function getProtocoloAtendimento()
    {
        return $this->ProtocoloAtendimento;
    }

    public function setProtocoloAtendimento($ProtocoloAtendimento)
    {
        $this->ProtocoloAtendimento = $ProtocoloAtendimento;
        return $this;
    }

    public function getIdCliente()
    {
        return $this->IdCliente;
    }

    public function setIdCliente($IdCliente)
    {
        $this->IdCliente = $IdCliente;
        return $this;
    }

    public function getIdAtendente()
    {
        return $this->IdAtendente;
    }

    public function setIdAtendente($IdAtendente)
    {
        $this->IdAtendente = $IdAtendente;
        return $this;
    }

    public function getDescAtendimento()
    {
        return $this->DescAtendimento;
    }

    public function setDescAtendimento($DescAtendimento)
    {
        $this->DescAtendimento = $DescAtendimento;
        return $this;
    }

    public function getStatusAtendimento()
    {
        return $this->StatusAtendimento;
    }

    public function setStatusAtendimento($StatusAtendimento)
    {
        $this->StatusAtendimento = $StatusAtendimento;
        return $this;
    }

    public function getObsAtendimento()
    {
        return $this->ObsAtendimento;
    }

    public function setObsAtendimento($ObsAtendimento)
    {
        $this->ObsAtendimento = $ObsAtendimento;
        return $this;
    }

    public function getDataAberturaAtendimento()
    {
        return $this->DataAberturaAtendimento;
    }

    public function setDataAberturaAtendimento($DataAberturaAtendimento)
    {
        $this->DataAberturaAtendimento = $DataAberturaAtendimento;
        return $this;
    }

    public function getDataFechamentoAtendimento()
    {
        return $this->DataFechamentoAtendimento;
    }

    public function setDataFechamentoAtendimento($DataFechamentoAtendimento)
    {
        $this->DataFechamentoAtendimento = $DataFechamentoAtendimento;
        return $this;
    }

    public function getHoraFechamentoAtendimento()
    {
        return $this->HoraFechamentoAtendimento;
    }

    public function setHoraFechamentoAtendimento($HoraFechamentoAtendimento)
    {
        $this->HoraFechamentoAtendimento = $HoraFechamentoAtendimento;
        return $this;
    }

    public function getHoraAberturaAtendimento()
    {
        return $this->HoraAberturaAtendimento;
    }

    public function setHoraAberturaAtendimento($HoraAberturaAtendimento)
    {
        $this->HoraAberturaAtendimento = $HoraAberturaAtendimento;
        return $this;
    }

    public function getTipoServicoAtendimento()
    {
        return $this->TipoServicoAtendimento;
    }

    public function setTipoServicoAtendimento($TipoServicoAtendimento)
    {
        $this->TipoServicoAtendimento = $TipoServicoAtendimento;
        return $this;
    }

    public function getPrioridadeAtendimento()
    {
        return $this->PrioridadeAtendimento;
    }

    public function setPrioridadeAtendimento($PrioridadeAtendimento)
    {
        $this->PrioridadeAtendimento = $PrioridadeAtendimento;
        return $this;
    }
 

    
    

}