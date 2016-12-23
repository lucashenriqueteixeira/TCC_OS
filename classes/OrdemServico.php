<?php
include_once '../classes/Conexao.php';

/**
 * Description of OrdemServico
 *
 * @author Administrador
 */
class OrdemServico extends Conexao{
    
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



    public function ListarOS($id){
        try {
            $sql = "SELECT * FROM atendimento JOIN ordemservico ON atendimento.ProtocoloAtendimento = ordemservico.OSProtocoloAtendimento WHERE OSProtocoloAtendimento = :id ;";

            $p_sql = Conexao::abrirConexao()->prepare($sql);
            $p_sql->bindValue(':id', $id);

            $p_sql->execute();

            return $p_sql->fetchall(PDO::FETCH_OBJ);
        }catch (PDOException $e)
        {
            print $e;
        }
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
