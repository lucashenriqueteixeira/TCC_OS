<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OrdemServico
 *
 * @author Administrador
 */
class OrdemServico {
    
    //Atributos
    private $IdEquipe;
    private $ProtocoloAtendimento;
    private $DataAberturaOS;
    private $HoraAberturaOS;
    private $Equipamentos;
    private $DataFechamentoOS;
    private $HoraFechamentoOS;
    private $OBSOS;
    private $StatusOS;
    
    //METODOS
    public function CadastrarOS(){
        
    }
    
    public function ListarOS(){
        
    }
    
    public function AlterarDadosOS(){
        
    }
    
    //METODOS GET E SET
    function getIdEquipe() {
        return $this->IdEquipe;
    }

    function getProtocoloAtendimento() {
        return $this->ProtocoloAtendimento;
    }

    function getDataAberturaOS() {
        return $this->DataAberturaOS;
    }

    function getHoraAberturaOS() {
        return $this->HoraAberturaOS;
    }

    function getEquipamentos() {
        return $this->Equipamentos;
    }

    function getDataFechamentoOS() {
        return $this->DataFechamentoOS;
    }

    function getHoraFechamentoOS() {
        return $this->HoraFechamentoOS;
    }

    function getOBSOS() {
        return $this->OBSOS;
    }

    function getStatusOS() {
        return $this->StatusOS;
    }

    function setIdEquipe($IdEquipe) {
        $this->IdEquipe = $IdEquipe;
    }

    function setProtocoloAtendimento($ProtocoloAtendimento) {
        $this->ProtocoloAtendimento = $ProtocoloAtendimento;
    }

    function setDataAberturaOS($DataAberturaOS) {
        $this->DataAberturaOS = $DataAberturaOS;
    }

    function setHoraAberturaOS($HoraAberturaOS) {
        $this->HoraAberturaOS = $HoraAberturaOS;
    }

    function setEquipamentos($Equipamentos) {
        $this->Equipamentos = $Equipamentos;
    }

    function setDataFechamentoOS($DataFechamentoOS) {
        $this->DataFechamentoOS = $DataFechamentoOS;
    }

    function setHoraFechamentoOS($HoraFechamentoOS) {
        $this->HoraFechamentoOS = $HoraFechamentoOS;
    }

    function setOBSOS($OBSOS) {
        $this->OBSOS = $OBSOS;
    }

    function setStatusOS($StatusOS) {
        $this->StatusOS = $StatusOS;
    }


    
}
