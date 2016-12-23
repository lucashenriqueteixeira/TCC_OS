<?php

include_once 'Conexao.php';
class Equipe extends Conexao{


    private $NomeEquipe;
    private $CidadeAtendida;
    private $IdEquipeCadastrada;
    private $func1;
    private $func2;
    private $func3;
    private $func4;


    public function CadastrarEquipe(){

        try
        {
            $SQL = "INSERT INTO equipes (NomeEquipe,CidadeAtendida) 
            VALUES (:NomeEquipe, :CidadeAtendida);";

            $p_sql = Conexao::abrirConexao()->prepare($SQL);

            $p_sql->bindValue(":NomeEquipe", $this->NomeEquipe);
            $p_sql->bindValue(":CidadeAtendida", $this->CidadeAtendida);

        
            $p_sql->execute();
            
            $IdEquipeCadastrada = Conexao::abrirConexao()->lastInsertId();

            return $IdEquipeCadastrada;
            

        //caso tudo de errado, retorna o exception do erro e so lamente
        }catch (Exception $e)
        
        {
            print "ERRO===>" . $e;
        }
        
    }
    public function cadFuncEquipe($ide){
        try{
        $sql = " UPDATE profissionalcampo SET idEquipes = '$ide' where idProfissionalCampo = $this->func1;";
        $sql .= " UPDATE profissionalcampo SET idEquipes = '$ide' where idProfissionalCampo = $this->func2;";
        $sql .= " UPDATE profissionalcampo SET idEquipes = '$ide' where idProfissionalCampo = $this->func3;";
        $sql .= " UPDATE profissionalcampo SET idEquipes = '$ide' where idProfissionalCampo = $this->func4;";

        $p_sql = Conexao::abrirConexao()->prepare($sql);

        $p_sql->bindValue(":idequipe", $ide);
        $p_sql->bindValue(":idp1", $this->func1);
        $p_sql->bindValue(":idp2", $this->func2);
        $p_sql->bindValue(":idp3", $this->func3);
        $p_sql->bindValue(":idp4", $this->func4);
        $p_sql->execute();

        return $p_sql;
    }catch(Exepction $e){
        print $e;
    }

}


    
    public function ListarFunc(){
        try{

            $SQL = "Select NomeProfissional,idProfissionalCampo from profissionalcampo;";
            $p_sql = Conexao::abrirConexao()->prepare($SQL);

            $p_sql->execute();
            return $p_sql->fetchall(PDO::FETCH_OBJ);

        }catch(Exception $e){

        }
        
    }


    public function ListarCidade(){
        try{
        $SQL = "SELECT distinct cidade FROM `enderecos` ";
        $p_sql = Conexao::abrirConexao()->prepare($SQL);

        $p_sql->execute();
        return $p_sql->fetchall(PDO::FETCH_OBJ);

        }catch(Exception $e){

        }
        
    }

    public function BuscaEquipe($Nome,$Cidade)
    {
        //caso o cliente clique no botao com o input vazio, vai retorna todos
        if($Cidade == '' and $Nome == ''){

            $SQL = "SELECT * FROM equipes";
            $p_sql = Conexao::abrirConexao()->prepare($SQL);
            
            $p_sql->execute();

            //retorno de array de objetos
            return $p_sql->fetchall(PDO::FETCH_OBJ);

        }

        //se tiver algum valor no input, vai retorna a busca de acordo com seu criterio de busca
            $SQL = "SELECT * FROM equipes WHERE NomeEquipe = :Nome or CidadeAtendida = :Cidade";
            $p_sql = Conexao::abrirConexao()->prepare($SQL);
            $p_sql->bindValue(":Nome",$Nome);
            $p_sql->bindValue(":Cidade",$Cidade);

            $p_sql->execute();

            //retorno de array de objetos
            return $p_sql->fetchall(PDO::FETCH_OBJ);
    }

    public function DetalhesEquipe($id)
    {
        $sql = "SELECT * FROM equipes 
                    JOIN profissionalcampo ON equipes.idEquipe = profissionalcampo.idEquipes WHERE profissionalcampo.idEquipes = :id";
        $p_sql = Conexao::abrirConexao()->prepare($sql);
        $p_sql->bindValue(":id",$id);

        $p_sql->execute();
        return $p_sql->fetchall(PDO::FETCH_OBJ);
    }

    //vai fazer update na tabela equipes
    public function EditarEquipe($id)
    {
        try {
            $sql = "UPDATE `equipes` SET `NomeEquipe`=':Nome',`CidadeAtendida`= ':Cidade' WHERE idEquipe = ':ID'";

            $p_sql = Conexao::abrirConexao()->prepare($sql);

            $p_sql->bindValue(":NomeEquipe", $this->NomeEquipe);
            $p_sql->bindValue(":Cidade", $this->CidadeAtendida);
            $p_sql->bindValue(":ID", $id);

            $p_sql->execute();

            return $p_sql;
        }
        catch (PDOException $e)
        {
            print $e;
        }

    }

    //update no id profissional
    public function EditarProfissionalEquipe($idEquipes,$idProfissional)
    {
        try {
            $sql = "UPDATE `profissionalcampo` SET `idEquipes`=':idEquipes' WHERE idProfissionalCampo = ':idProfissional';";

            $p_sql = Conexao::abrirConexao()->prepare($sql);
            $p_sql->bindValue(":idEquipes",$idEquipes);

            $p_sql->bindValue(":idProfissional",$idProfissional);
        }
        catch (PDOException $e)
        {
            print $e;
        }

    }



    public function getNomeEquipe() {
        return $this->NomeEquipe;
    }

    public function getCidadeAtendida() {
        return $this->CidadeAtendida;
    }


    public function setNomeEquipe($NomeEquipe) {
        $this->NomeEquipe = $NomeEquipe;
    }

    public function setCidadeAtendida($CidadeAtendida) {
        $this->CidadeAtendida = $CidadeAtendida;
    }

    public function getFunc1() {
        return $this->Func1;
    }
    public function getFunc2() {
        return $this->Func2;
    }
    public function getFunc3() {
        return $this->Func3;
    }
    public function getFunc4() {
        return $this->Func4;
    }

    public function setFunc1($Func1) {
        $this->func1 = $Func1;
    }
    public function setFunc2($Func2) {
        $this->func2 = $Func2;
    }
    public function setFunc3($Func3) {
        $this->func3 = $Func3;
    }
    public function setFunc4($Func4) {
        $this->func4 = $Func4;
    }

}
