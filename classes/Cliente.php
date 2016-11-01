<?php
include_once 'Conexao.php';

class Cliente extends Conexao
{
    
    //Atributos
			private $NumeroConta;
			private $NomeCliente;
			private $CPF_CNPJ;
			private $SexoCliente;
			private $DTNCliente;
			private $TelefoneCliente;
			private $IdEndereco;

			private $NCCliente;
			private $LogradouroCliente;
			private $BairroCliente;
			private $CidadeCliente;
			private $UFCliente;
			private $ComplementoCliente;
			
			//METODO PARA CADASTRAR CLIENTE,
			//
    public function CadastrarCliente($ID){

        try
        {
            $SQL = "INSERT INTO clientes (idEndereco,NomeCliente,CPF_CNPJ,SexoCliente,DTNCliente,TelefoneCliente, StatusCliente) VALUES (:idEndereco,:NomeCliente,:CPF_CNPJ,:SexoCliente,:DTNCliente,:TelefoneCliente, 'ativo');";

            $p_sql = Conexao::abrirConexao()->prepare($SQL);

            $p_sql->bindValue(":NomeCliente", $this->NomeCliente);
            $p_sql->bindValue(":CPF_CNPJ", $this->CPF_CNPJ);
            $p_sql->bindValue(":SexoCliente", $this->SexoCliente);
            $p_sql->bindValue(":DTNCliente", $this->DTNCliente);
            $p_sql->bindValue(":TelefoneCliente", $this->TelefoneCliente);
            //$p_sql->bindValue(":StatusCliente", $this->StatusCliente);
            $p_sql->bindValue(":idEndereco",$ID);
		
            $p_sql->execute();
            
            return $p_sql;
            

        //caso tudo de errado, retorna o exception do erro e so lamente
        }catch (Exception $e)
        
        {
            print "ERRO" . $e;
        }
    }


    public function CadastrarEndereco()
    {
        try
        {
            $SQL = "INSERT INTO enderecos (NumeroCasa,Logradouro,Bairro,Cidade,UF,Complemento) VALUES (:NumeroCasa,:Logradouro,:Bairro,:Cidade,:UF,:Complemento); ";
        

            $p_sql = Conexao::abrirConexao()->prepare($SQL);

            $p_sql->bindValue(":NumeroCasa", $this->NCCliente);
            $p_sql->bindValue(":Logradouro", $this->LogradouroCliente);
            $p_sql->bindValue(":Bairro", $this->BairroCliente);
            $p_sql->bindValue(":Cidade", $this->CidadeCliente);
            $p_sql->bindValue(":UF", $this->UFCliente);
            $p_sql->bindValue(":Complemento", $this->ComplementoCliente);
        
            $p_sql->execute();

            $IdEndereco = Conexao::abrirConexao()->lastInsertId();

            return $IdEndereco;
        }
        catch(Exception $e)
        {
            print "erro" . $e;
        }
    }

    //Metodo para realizar Busca do Cliente
    public function BuscarCliente($Nome)
    {
        try
        {

            //Faz a busca no banco usando nome ou cpf
            $SQL = "SELECT * FROM clientes WHERE NomeCliente like '$Nome%' ;";

            //prepara a conexao sql
            $p_sql = Conexao::abrirConexao()->prepare($SQL);

            //faz a execução no banco
            $p_sql->execute();

            //retorna a consulta no banco como objetos
            return $p_sql->fetchall(PDO::FETCH_OBJ);

            //caso tudo de errado, retorna o exception do erro e so lamente
        }catch (Exception $e)
        {
                //é feito um print do erro tratado
                print "ERRO" . $e;
        }
    }

    

    //Metodo para listar dados do cliente
    //e apartir disso, fazer alterações no codigo
    public function ListarCliente($ID)
    {
        try
        {

            //Faz a busca no banco usando nome ou cpf
            $SQL = "SELECT * FROM clientes JOIN enderecos ON enderecos.idEndereco = clientes.idEndereco WHERE NumeroConta = :ID ;";

            //prepara a conexao sql
            $p_sql = Conexao::abrirConexao()->prepare($SQL);

            $p_sql->bindValue(":ID", $ID);

            //faz a execução no banco
            $p_sql->execute();

            //retorna a consulta no banco como objetos
            return $p_sql->fetchall(PDO::FETCH_OBJ);

            //caso tudo de errado, retorna o exception do erro e so lamente
        }catch (Exception $e)
        {
                //é feito um print do erro tratado
                print "ERRO" . $e;
        }
    }

    public function AlterarDadosCliente($ID)
    {
        try
        {
            $SQL = "UPDATE clientes 
            SET NomeCliente=:Nome,CPF_CNPJ=:CPF_CNPJ,SexoCliente=:Sexo,:DTNCliente=:DTN,TelefoneCliente=:Telefone 
            WHERE :ID ;";

            $p_sql = Conexao::abrirConexao()->prepare($SQL);

            $p_sql->bindValue(":Nome",$this->NomeCliente);
            $p_sql->bindValue("CPF_CNPJ",$this->CPF_CNPJ);
            $p_sql->bindValue(":Sexo",$this->SexoCliente);
            $p_sql->bindValue(":DTNCliente",$this->DTNCliente);
            $p_sql->bindValue(":Telefone",$this->TelefoneCliente);
            $p_sql->bindValue(":ID", $ID);

            return $p_sql;
        }
        catch(Exception $e)
        {
            print "erro==>" . $e;
        }
    }

    public function AlterarEndereco($ID)
    {
        try
        {
            $SQL = "UPDATE enderecos 
            SET NumeroCasa = :Numero, Logradouro = :Logradouro, Bairro = :Bairro, Cidade = :Cidade, UF = :UF 
            WHERE idEndereco = :ID ;";

            $p_sql = Conexao::abrirConexao()->prepare($SQL);

            $p_sql->bindValue(":Numero",$this->NCFuncionario);
            $p_sql->bindValue(":Logradouro",$this->LogradouroFuncionario);
            $p_sql->bindValue(":Bairro",$this->BairroFuncionario);
            $p_sql->bindValue(":Cidade",$this->CidadeFuncionario);
            $p_sql->bindValue(":UF",$this->UFFuncionario);
            $p_sql->bindValue(":ID",$ID);

            $p_sql->execute();

            return $p_sql;

        }catch (Exception $e)
        {
            print "Erro===>" . $e;
        }
    }
        
   

	#####  #####   ######              ######  ######  #######
    #      #          #                #       #          #
    #  ##  ####       #         ##     ######  #####      #
    #   #  #          #         ##          #  #          #
    #####  #####      #                ######  ######     #
	   
    
    //METODOS GET E SET
    public function getComplementoCliente() {
        return $this->ComplementoCliente;
    }

    public function setComplementoCliente($ComplementoCliente) {
        $this->ComplementoCliente = $ComplementoCliente;
    }

    public function setIdCliente($IdCliente){
        $this->IdCliente=$IdCliente;
    }
    Public function getIdCliente(){
        return $this->IdCliente;
    }
    
    public function setNumeroConta($NumeroConta){
        $this->NumeroConta=$NumeroConta;
    }
    Public function getNumeroConta(){
        return $this->NumeroConta;
    }
    
    public function setNomeCliente($NomeCliente){
        $this->NomeCliente=$NomeCliente;
    }
    Public function getNomeCliente(){
        return $this->NomeCliente;
    }
    
    public function setCPF_CNPJ($CPF_CNPJ){
        $this->CPF_CNPJ=$CPF_CNPJ;
    }
    Public function getCPF_CNPJ(){
        return $this->CPF_CNPJ;
    }
    
    public function setSexoCliente($SexoCliente){
        $this->SexoCliente=$SexoCliente;
    }
    Public function getSexoCliente(){
        return $this->SexoCliente;
    }
    
    public function setDTNCliente($DTNCliente){
        $this->DTNCliente=$DTNCliente;
    }
    Public function getDTNCliente(){
        return $this->DTNCliente;
    }
    
    public function setTelefoneCliente($TelefoneCliente){
        $this->TelefoneCliente=$TelefoneCliente;
    }
    Public function getTelefoneCliente(){
        return $this->TelefoneCliente;
    }
    
    public function setNCCliente($NCCliente){
        $this->NCCliente=$NCCliente;
    }
    Public function getNCCliente(){
        return $this->NCCliente;
    }
    
    public function setLogradouroCliente($LogradouroCliente){
        $this->LogradouroCliente=$LogradouroCliente;
    }
    Public function getLogradouroCliente(){
        return $this->LogradouroCliente;
    }
    
    public function setBairroCliente($BairroCliente){
        $this->BairroCliente=$BairroCliente;
    }
    Public function getBairroCliente(){
        return $this->BairroCliente;
    }
    
    public function setCidadeCliente($CidadeCliente){
        $this->CidadeCliente=$CidadeCliente;
    }
    Public function getCidadeCliente(){
        return $this->CidadeCliente;
    }
    
    public function setUFCliente($UFCliente){
        $this->UFCliente=$UFCliente;
    }
    Public function getUFCliente(){
        return $this->UFCliente;
    }
    
    public function setIdEndereco($IdEndereco)
    {
        $this->IdEndereco = $IdEndereco;
    }

    public function getIdEndereco()
    {
        return $this->IdEndereco;
    }
    
    
}