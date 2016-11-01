<?php
// incluir conexão.php
include_once 'Conexao.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Atendimento
 *
 * @author Administrador
 */
class Atendimento extends Conexao {
    
    //Atributos
    private $CPFCliente;
    private $NumContaCliente;

    private $IdCliente;
    private $IdAtendente;
    
    private $ProtocoloAtendimento;
    private $StatusAtendimento;

    private $DataAberturaAtendimento;
    private $HoraAberturaAtendimento;
    private $DataFechamentoAtendimento;
    private $HoraFechamentoAtendimento;
    private $TipoServicoAtendimento;
    private $PrioridadeAtendimento;
    private $DescServicoAtendimento;
    private $OBSAtendimento;
    
    //METODOS
    
    public function BuscarCliente(){

        try{
            /*$hora=date("Y-m-d H:i:s");
            echo strtotime($hora);*/
            $sql = "SELECT * from clientes left join enderecos on enderecos.idEndereco = clientes.idEndereco where NumeroConta=:numconta or CPF_CNPJ=:cpf  limit 1;";
            $p_sql = Conexao::abrirConexao()->prepare($sql);
            $p_sql->bindValue(":cpf", $this->CPFCliente);
            $p_sql->bindValue(":numconta", $this->NumContaCliente);
        
            $p_sql->execute();
        
            return $p_sql->fetchall(PDO::FETCH_OBJ);

        //caso tudo de errado, retorna o exception do erro e so lamente
        }catch (Exception $e)
        {
            print "ERRO" . $e;
        }
    }


       //função pública CadastrarAtendimento
    public function CadastrarAtendimento(){
        

        try
        {
            //O que é isso viado?
            $SQL = "INSERT INTO atendimento (NumeroConta,idAtendente,DescServico,OBSAtendimento,StatusAtendimento,DataAberturaAtendimento,HoraAberturaAtendimento,PrioridadeAtendimento) 
            VALUES (:NumContaCliente, :idAtendente, :DescServicoAtendimento, :OBSAtendimento, :StatusAtendimento, :DataAberturaAtendimento, :HoraAberturaAtendimento, :PrioridadeAtendimento );";

            $p_sql = Conexao::abrirConexao()->prepare($SQL);

            $p_sql->bindValue(":NumContaCliente", $this->NumContaCliente);
            $p_sql->bindValue(":idAtendente", $_SESSION['idAtendente']);
            $p_sql->bindValue(":DescServicoAtendimento", $this->DescServicoAtendimento);
            $p_sql->bindValue(":OBSAtendimento", $this->OBSAtendimento);
            $p_sql->bindValue(":StatusAtendimento", $this->StatusAtendimento);
            $p_sql->bindValue(":DataAberturaAtendimento", $this->DataAberturaAtendimento);
            $p_sql->bindValue(":HoraAberturaAtendimento", $this->HoraAberturaAtendimento);
            $p_sql->bindValue(":PrioridadeAtendimento", $this->PrioridadeAtendimento);
            


        
            $p_sql->execute();
            
            $ProtocoloAtendimento = Conexao::abrirConexao()->lastInsertId();

            return $ProtocoloAtendimento;
            

        //caso tudo de errado, retorna o exception do erro e so lamente
        }catch (Exception $e)
        
        {
            print "ERRO===>" . $e;
        }
    }



    
    
    public function AlterarDadosAtendimento(){
        
    }
    
    //METODOS GET E SET
    function getIdCliente() {
        return $this->IdCliente;
    }

    function getIdAtendente() {
        return $this->IdAtendente;
    }

    /*function getProtocoloAtendimento() {
        return $this->ProtocoloAtendimento;
    }
*/
    function getDescServicoAtendimento() {
        return $this->DescServicoAtendimento;
    }

    function getOBSAtendimento() {
        return $this->OBSAtendimento;
    }

    function getStatusAtendimento() {
        return $this->StatusAtendimento;
    }

    function getDataAberturaAtendimento() {
        return $this->DataAberturaAtendimento;
    }

    function getHoraAberturaAtendimento() {
        return $this->HoraAberturaAtendimento;
    }

    function getDataFechamentoAtendimento() {
        return $this->DataFechamentoAtendimento;
    }

    function getHoraFechamentoAtendimento() {
        return $this->HoraFechamentoAtendimento;
    }

    function getTipoServicoAtendimento() {
        return $this->TipoServicoAtendimento;
    }

    function getPrioridadeAtendimento() {
        return $this->PrioridadeAtendimento;
    }
    function getCPFCliente() {
        return $this->CPFCliente;
    }
    function getNumContaCliente() {
        return $this->NumContaCliente;
    }

    function setNumContaCliente($NumContaCliente) {
        $this->NumContaCliente = $NumContaCliente;
    }

    function setCPFCliente($CPFCliente) {
        $this->CPFCliente = $CPFCliente;
    }

    function setIdCliente($IdCliente) {
        $this->IdCliente = $IdCliente;
    }

    function setIdAtendente($IdAtendente) {
        $this->IdAtendente = $IdAtendente;
    }
/*
    function setProtocoloAtendimento($ProtocoloAtendimento) {
        $this->ProtocoloAtendimento = $ProtocoloAtendimento;
    }
*/
    function setDescServicoAtendimento($DescServicoAtendimento) {
        $this->DescServicoAtendimento = $DescServicoAtendimento;
    }

    function setOBSAtendimento($OBSAtendimento) {
        $this->OBSAtendimento = $OBSAtendimento;
    }

    function setStatusAtendimento($StatusAtendimento) {
        $this->StatusAtendimento = $StatusAtendimento;
    }

    function setDataAberturaAtendimento($DataAberturaAtendimento) {
        $this->DataAberturaAtendimento = $DataAberturaAtendimento;
    }

    function setHoraAberturaAtendimento($HoraAberturaAtendimento) {
        $this->HoraAberturaAtendimento = $HoraAberturaAtendimento;
    }

    function setDataFechamentoAtendimento($DataFechamentoAtendimento) {
        $this->DataFechamentoAtendimento = $DataFechamentoAtendimento;
    }

    function setHoraFechamentoAtendimento($HoraFechamentoAtendimento) {
        $this->HoraFechamentoAtendimento = $HoraFechamentoAtendimento;
    }

    function setTipoServicoAtendimento($TipoServicoAtendimento) {
        $this->TipoServicoAtendimento = $TipoServicoAtendimento;
    }

    function setPrioridadeAtendimento($PrioridadeAtendimento) {
        $this->PrioridadeAtendimento = $PrioridadeAtendimento;
    }
   
}