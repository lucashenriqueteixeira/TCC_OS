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
    //metodo responsavel por mostrar detalhes do atendimento
    public function DetalhesAtendimento($Protocolo)
    {
        try
        {
            $sql = "SELECT * FROM clientes 
                JOIN enderecos ON clientes.idEndereco = enderecos.idEndereco 
                JOIN atendimento ON atendimento.NumeroContaCliente = clientes.NumeroConta
                WHERE ProtocoloAtendimento = :Protocolo;";

            $p_sql = Conexao::abrirConexao()->prepare($sql);
            $p_sql->bindValue(":Protocolo", $Protocolo);
            

            $p_sql->execute();

            //faz o retorno como um array de objetos
            //para trabalhar com foreach
            return $p_sql->fetchall(PDO::FETCH_OBJ);
        }catch(Exception $e)
        {
            print $e;
        }
    }


    //metodo 
    public function BuscarCliente(){

        try{
            
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
            
            $SQL = "INSERT INTO atendimento (NumeroContaCliente,idAtendente,DescServico,OBSAtendimento,StatusAtendimento,DataAberturaAtendimento,HoraAberturaAtendimento,PrioridadeAtendimento,TipoServicoAtendimento) 
            VALUES (:NumContaCliente, :idAtendente, :DescServicoAtendimento, :OBSAtendimento, :StatusAtendimento, :DataAberturaAtendimento, :HoraAberturaAtendimento, :PrioridadeAtendimento,:TipoServicoAtendimento );";

            $p_sql = Conexao::abrirConexao()->prepare($SQL);

            $p_sql->bindValue(":NumContaCliente", $this->NumContaCliente);
            $p_sql->bindValue(":idAtendente", $_SESSION['idAtendente']);
            $p_sql->bindValue(":DescServicoAtendimento", $this->DescServicoAtendimento);
            $p_sql->bindValue(":OBSAtendimento", $this->OBSAtendimento);
            $p_sql->bindValue(":StatusAtendimento", $this->StatusAtendimento);
            $p_sql->bindValue(":DataAberturaAtendimento", $this->DataAberturaAtendimento);
            $p_sql->bindValue(":HoraAberturaAtendimento", $this->HoraAberturaAtendimento);
            $p_sql->bindValue(":PrioridadeAtendimento", $this->PrioridadeAtendimento);
            $p_sql->bindValue(":TipoServicoAtendimento",$this->TipoServicoAtendimento);
            


        
            $p_sql->execute();
            
            $ProtocoloAtendimento = Conexao::abrirConexao()->lastInsertId();

            return $ProtocoloAtendimento;
            

        //caso tudo de errado, retorna o exception do erro e so lamente
        }catch (Exception $e)
        
        {
            print "ERRO===>" . $e;
        }
    }

    //metodo para buscar e listar atendimentos
    public function BuscarAtendimento($Conta)
    {
        //caso o campo esteja vazio retorna tudo
        if($Conta == ""){

            $sql = "SELECT * FROM clientes JOIN enderecos ON clientes.idEndereco = enderecos.idEndereco 
            JOIN atendimento ON atendimento.NumeroContaCliente = clientes.NumeroConta;";

            $p_sql = Conexao::abrirConexao()->prepare($sql);
            $p_sql->bindValue(":Conta", $Conta);

            $p_sql->execute();

        //faz o retorno como um array de objetos
        //para trabalhar com foreach
            return $p_sql->fetchall(PDO::FETCH_OBJ);
        }

        $sql = "SELECT * FROM clientes JOIN enderecos ON clientes.idEndereco = enderecos.idEndereco 
            JOIN atendimento
            ON atendimento.NumeroContaCliente = clientes.NumeroConta
            WHERE clientes.NumeroConta = :Conta or clientes.CPF_CNPJ = :Conta;";

        $p_sql = Conexao::abrirConexao()->prepare($sql);
        $p_sql->bindValue(":Conta", $Conta);


        $p_sql->execute();

        //faz o retorno como um array de objetos
        //para trabalhar com foreach
        return $p_sql->fetchall(PDO::FETCH_OBJ);

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