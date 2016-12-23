<?php
include_once 'Conexao.php';
/**
*Classe responsavel por toda as operações feitas com o funcionario
*Login, Cadastro, Update e Buscas.
**/
class Funcionario extends Conexao{

    //Atributos
    private $IdFuncionario;
    private $NomeFuncionario;
    private $CPFFuncionario;
    private $SexoFuncionario;
    private $CargoFuncionario;
    private $DTNFuncionario;
    private $TelefoneFuncionario;
	private $LoginFuncionario;
    private $SenhaFuncionario;
	
    private $EnderecoIDProfissional;
    private $EnderecoIDAtendente;
	
    private $NCFuncionario;
    private $LogradouroFuncionario;
    private $BairroFuncionario;
    private $CidadeFuncionario;
    private $UFFuncionario;
    private $ComplementoFuncionario;
	
	
	######### Metodo responsavel por cadastrar ebdereço
    public function CadastrarEnderecoFuncionario(){
        try
        {
            $SQL = "INSERT INTO enderecos (NumeroCasa,Logradouro,Bairro,Cidade,UF,Complemento) VALUES (:NumeroCasa,:Logradouro,:Bairro,:Cidade,:UF,:Complemento)";

            $p_sql = Conexao::abrirConexao()->prepare($SQL);
            $p_sql->bindValue(":NumeroCasa", $this->NCFuncionario);
            $p_sql->bindValue(":Logradouro", $this->LogradouroFuncionario);
            $p_sql->bindValue(":Bairro", $this->BairroFuncionario);
            $p_sql->bindValue(":Cidade", $this->CidadeFuncionario);
            $p_sql->bindValue(":UF", $this->UFFuncionario);
            $p_sql->bindValue(":Complemento", $this->ComplementoFuncionario);
        
            $p_sql->execute();
        
            $IdEndereco=Conexao::abrirConexao()->lastInsertId();
            return $IdEndereco;
        
        //caso tudo de errado, retorna o exception do erro e so lamente
        }catch (Exception $e)
        {
            print "ERRO" . $e;
        }
    }

	
	
	// (select LAST_INSERT_ID())
    
    //metodo responsavel pelo login
    public function autenticarAtendente()
    {

        try
        {
        
            $sql = "SELECT CargoAtendente, NomeAtendente, idAtendente from atendente where LoginAtendente = :login and SenhaAtendente = :senha";
            $p_sql = Conexao::abrirConexao()->prepare($sql);
            $p_sql->bindValue(":login", $this->LoginFuncionario);
            $p_sql->bindValue(":senha", $this->SenhaFuncionario);
        
            $p_sql->execute();
        
            return $p_sql->fetch(PDO::FETCH_OBJ);

        //caso tudo de errado, retorna o exception do erro e so lamente
        }catch (Exception $e)
        {
            print "ERRO" . $e;
        }
    }
    
    ####metodo responsavel por realizar cadastro do funcionario#######
    public function CadastrarAtendente()
    {
        try
        {
            $SQL = "INSERT INTO atendente
            (idEndereco,NomeAtendente,CPFAtendente,SexoAtendente,CargoAtendente,DTNAtendente,TelefoneAtendente,StatusAtendente,SenhaAtendente,LoginAtendente) 
            VALUES (:idEndereco,:NomeAtendente,:CPFAtendente,:SexoAtendente,:CargoAtendente,:DTNAtendente,:TelefoneAtendente,'Ativo',:SenhaAtendente,:LoginAtendente);";

            $p_sql = Conexao::abrirConexao()->prepare($SQL);
            $p_sql->bindValue(":idEndereco", $this->EnderecoIDAtendente);
            $p_sql->bindValue(":NomeAtendente", $this->NomeFuncionario);
    		$p_sql->bindValue(":CPFAtendente", $this->CPFFuncionario);
    	   	$p_sql->bindValue(":SexoAtendente", $this->SexoFuncionario);
            $p_sql->bindValue(":CargoAtendente", $this->CargoFuncionario);
    		$p_sql->bindValue(":DTNAtendente", $this->DTNFuncionario);
	       	$p_sql->bindValue(":TelefoneAtendente", $this->TelefoneFuncionario);
            $p_sql->bindValue(":SenhaAtendente", $this->SenhaFuncionario);
            $p_sql->bindValue(":LoginAtendente", $this->LoginFuncionario);
		
            $p_sql->execute();

            session_start();

            $_SESSION['CargoCadastrado'] = $this->CargoFuncionario;
            $_SESSION['NomeCadastrado'] = $this->NomeFuncionario;

            return header("location:../views/frmCadastrarFuncionario.php");

        //caso tudo de errado, retorna o exception do erro e so lamente
        }catch (Exception $e)
        {
            print "ERRO===>" . $e;
        }

    }
	
	public function CadastrarProfissionalCampo()
    {
        try
        {
            $SQL = "INSERT INTO profissionalcampo
            (idEndereco,NomeProfissional,CPFProfissional,SexoProfissional,DTNProfissional,TelefoneProfissional,StatusProfissional,SenhaProfissional,LoginProfissional) 
            VALUES (:idEndereco,:NomeProfissional,:CPFProfissional,:SexoProfissional,:DTNProfissional,:TelefoneProfissional,'Ativo',:SenhaProfissional,:LoginProfissional);";

            $p_sql = Conexao::abrirConexao()->prepare($SQL);
            $p_sql->bindValue(":idEndereco", $this->EnderecoIDAtendente);
            $p_sql->bindValue(":NomeProfissional", $this->NomeFuncionario);
    		$p_sql->bindValue(":CPFProfissional", $this->CPFFuncionario);
    	   	$p_sql->bindValue(":SexoProfissional", $this->SexoFuncionario);
    		$p_sql->bindValue(":DTNProfissional", $this->DTNFuncionario);
	       	$p_sql->bindValue(":TelefoneProfissional", $this->TelefoneFuncionario);
            $p_sql->bindValue(":SenhaProfissional", $this->SenhaFuncionario);
            $p_sql->bindValue(":LoginProfissional", $this->LoginFuncionario);
		
            $p_sql->execute();

            session_start();
            $_SESSION['CargoCadastrado'] = $this->CargoFuncionario;
            $_SESSION['NomeCadastrado'] = $this->NomeFuncionario;

            return header("location:../views/frmCadastrarFuncionario.php");

        //caso tudo de errado, retorna o exception do erro e so lamente
        }catch (Exception $e)
        {
            print "ERRO===>" . $e;
        }

    }


    //realiza busca no banco dos funcionarios cadastrados
    public function BuscarAtendente($Nome)
    {
        try
        {

            //Faz a busca no banco usando nome ou cpf
            $SQL = "SELECT * FROM atendente WHERE NomeAtendente like '$Nome%' or CPFAtendente = '$Nome' ;";

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

    //metodo para alterar dados do fucnionario
    public function AlterarDadosAtendente()
    {
        try
        {
        //$SQL = "UPDATE atendente
        //   SET NomeAtendente,CPFAtendente,SexoAtendente,SenhaAtendente,LoginAtendente) VALUES //(:nome,:CPF,:sexo,:senha,:login);";

        $p_sql = Conexao::abrirConexao()->prepare($SQL);
        $p_sql->bindValue(":nome", $this->NomeFuncionario);
        $p_sql->bindValue(":sexo", $this->SexoFuncionario);
        $p_sql->bindValue(":CPF", $this->CPFFuncionario);
        $p_sql->bindValue(":senha", $this->SenhaFuncionario);
        $p_sql->bindValue(":login", $this->LoginFuncionario);

        $p_sql->execute();

        print "alterado";
        //caso tudo de errado, retorna o exception do erro e so lamente
        }catch (Exception $e)
        {
            print "ERRO" . $e;
        }
    }


    //metodo para listar dados de funcionario escolhido pelo id
    public function ListarFuncionario($ID)
    {
        try
        {
            //Retorna o funcionario passando na clause where o id do funcionario
            $SQL = "SELECT * FROM atendente as a JOIN enderecos as e ON a.idEndereco = e.idEndereco WHERE idAtendente = :ID;";

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

    //Metodo para realizar alteração no dados do funcionario, Passando o ID como parametro
    public function AlterarFuncionario($ID)
    {
        try
        {
            $SQL = "UPDATE atendente 
            SET NomeAtendente=:Nome,CPFAtendente=:CPF,SexoAtendente=:Sexo,DTNAtendente=:DTN,TelefoneAtendente=:Telefone,SenhaAtendente=:Senha,LoginAtendente=:Login 
            WHERE idAtendente = :ID;";

            $p_sql = Conexao::abrirConexao()->prepare($SQL);
            $p_sql->bindValue(":Nome",$this->NomeFuncionario);
            $p_sql->bindValue(":CPF",$this->CPFFuncionario);
            $p_sql->bindValue(":Sexo",$this->SexoFuncionario);
            //$p_sql->bindValue(":Cargo"$this->Carg,);
            $p_sql->bindValue(":DTN",$this->DTNFuncionario);
            $p_sql->bindValue(":Telefone",$this->TelefoneFuncionario);
            $p_sql->bindValue(":Senha",$this->SenhaFuncionario);
            $p_sql->bindValue(":Login",$this->LoginFuncionario);
            $p_sql->bindValue(":ID",$ID);

            $p_sql->execute();

            return $p_sql;

        }catch (Exception $e)
        {
            print $e;
        }
    }

    //Metodo Para Realizar update no endereco, passando o id como paramentro
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
    
    public function getIdFuncionario()
    {
        return $this->IdFuncionario;
    }

    public function getNomeFuncionario()
    {
        return $this->NomeFuncionario;
    }

    public function getCPFFuncionario()
    {
        return $this->CPFFuncionario;
    }

    public function getSexoFuncionario()
    {
        return $this->SexoFuncionario;
    }

    public function getCargoFuncionario()
    {
        return $this->CargoFuncionario;
    }

    public function getDTNFuncionario()
    {
        return $this->DTNFuncionario;
    }

    public function getTelefoneFuncionario()
    {
        return $this->TelefoneFuncionario;
    }

    public function getNCFuncionario()
    {
        return $this->NCFuncionario;
    }

    public function getLogradouroFuncionario()
    {
        return $this->LogradouroFuncionario;
    }

    public function getBairroFuncionario()
    {
        return $this->BairroFuncionario;
    }

    public function getCidadeFuncionario()
    {
        return $this->CidadeFuncionario;
    }

    public function getUFFuncionario()
    {
        return $this->UFFuncionario;
    }

    public function getLoginFuncionario()
    {
        return $this->LoginFuncionario;
    }

    public function getSenhaFuncionario()
    {
        return $this->SenhaFuncionario;
    }

    public function getComplementoFuncionario()
    {
        return $this->ComplementoFuncionario;
    }

    public function getEFuncionario()
    {
        return $this->EFuncionario;
    }

    public function getEnderecoID()
    {
        return $this->EnderecoID;
    }


    //==================================================//
                   //sets//

    public function setIdFuncionario($IdFuncionario)
    {
        $this->IdFuncionario = $IdFuncionario;
    }

    public function setNomeFuncionario($NomeFuncionario)
    {
        $this->NomeFuncionario = $NomeFuncionario;
    }

    public function setCPFFuncionario($CPFFuncionario)
    {
        $this->CPFFuncionario = $CPFFuncionario;
    }

    public function setSexoFuncionario($SexoFuncionario)
    {
        $this->SexoFuncionario = $SexoFuncionario;
    }

    public function setCargoFuncionario($CargoFuncionario)
    {
        $this->CargoFuncionario = $CargoFuncionario;
    }

    public function setDTNFuncionario($DTNFuncionario)
    {
        $this->DTNFuncionario = $DTNFuncionario;
    }

    public function setTelefoneFuncionario($TelefoneFuncionario)
    {
        $this->TelefoneFuncionario = $TelefoneFuncionario;
    }

    public function setNCFuncionario($NCFuncionario)
    {
        $this->NCFuncionario = $NCFuncionario;
    }

    public function setLogradouroFuncionario($LogradouroFuncionario)
    {
        $this->LogradouroFuncionario = $LogradouroFuncionario;
    }

    public function setBairroFuncionario($BairroFuncionario)
    {
        $this->BairroFuncionario = $BairroFuncionario;
    }

    public function setCidadeFuncionario($CidadeFuncionario)
    {
        $this->CidadeFuncionario = $CidadeFuncionario;
    }

    public function setUFFuncionario($UFFuncionario)
    {
        $this->UFFuncionario = $UFFuncionario;
    }

    public function setLoginFuncionario($LoginFuncionario)
    {
        $this->LoginFuncionario = $LoginFuncionario;
    }

    public function setSenhaFuncionario($SenhaFuncionario)
    {
        $this->SenhaFuncionario = $SenhaFuncionario;
    }

    public function setComplementoFuncionario($ComplementoFuncionario)
    {
        $this->ComplementoFuncionario = $ComplementoFuncionario;
    }

    public function setEFuncionario($EFuncionario)
    {
        $this->EFuncionario = $EFuncionario;
    }

    public function setEnderecoID($EnderecoID)
    {
        $this->EnderecoID = $EnderecoID;
    }
    public function getEnderecoIDAtendente()
    {
        return $this->EnderecoIDAtendente;
    }

    public function getEnderecoIDProfissional()
    {
        return $this->EnderecoIDProfissional;
    }

    public function setEnderecoIDAtendente($EnderecoIDAtendente)
    {
        $this->EnderecoIDAtendente = $EnderecoIDAtendente;
    }

    public function setEnderecoIDProfissional($EnderecoIDProfissional)
    {
        $this->EnderecoIDProfissional = $EnderecoIDProfissional;
    }

}//fim da classe