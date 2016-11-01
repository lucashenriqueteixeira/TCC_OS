<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Equipe
 *
 * @author Administrador
 */
class Equipe {
    
    //atributos
    private $IdEquipe;
    private $NomeEquipe;
    private $CidadeAtendida;
    
    //METODOS
    public function CadastrarEquipe(){
        
    }
    
    public function ListarEquipes(){
        
    }
    
    public function AlterarDadosEquipe(){
        
    }
    
    //METODOS GET E SET
    public function getIdEquipe() {
        return $this->IdEquipe;
    }

    public function getNomeEquipe() {
        return $this->NomeEquipe;
    }

    public function getCidadeAtendida() {
        return $this->CidadeAtendida;
    }

    public function setIdEquipe($IdEquipe) {
        $this->IdEquipe = $IdEquipe;
    }

    public function setNomeEquipe($NomeEquipe) {
        $this->NomeEquipe = $NomeEquipe;
    }

    public function setCidadeAtendida($CidadeAtendida) {
        $this->CidadeAtendida = $CidadeAtendida;
    }


    
    
}
