
<?php
require_once "Conexao.php";
class DaoUsuarios
{

    public function webservicelogin($login, $senhacripto)
    {
	try	{
		$sql = "SELECT idProfissionalCampo FROM profissionalcampo WHERE LoginProfissional = :login AND SenhaProfissional = :senha;";
		$stmt = Conexao::abrirConexao()->prepare($sql);
		$stmt->bindValue(':login', $login);
		$stmt->bindValue(':senha', $senhacripto);
		$stmt->execute();
		
		//se existir o usuario...
		if($linha = $stmt->fetch(PDO::FETCH_OBJ)) {

			//pega o id do usuario
			$idusuario = $linha->idProfissionalCampo;

			//busca informações dele (consultas, reservas, compras...)
			$sql = "SELECT * FROM profissionalcampo left join equipes on profissionalcampo.idEquipes=equipes.idEquipe where idProfissionalCampo = '$idusuario';";
			$stmt = Conexao::abrirConexao()->prepare($sql);
			$stmt->bindValue(':idusuario', $idusuario);
			$stmt->execute();

			//cria o array e o popula
			$matriz = array();
			while($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
				$vetor['NomeProfissional']=$linha->NomeProfissional;
				//$vetor['idProfissionalCampo']=$linha->idProfissionalCampo;
				//$vetor['CPFProfissional']=$linha->CPFProfissional;
				//$vetor['idEquipe']=$linha->idEquipes;
				$vetor['NomeEquipe']=$linha->NomeEquipe;
 			    $vetor['CidadeAtendida']=$linha->CidadeAtendida;

				
				array_push($matriz,$vetor);
			}		
			//retorna o json	
			return json_encode($matriz);
		}			
	}catch( PDOException $p) {
		echo 'Erro: ' . $p->getMessage();
	}catch( Exception $e) {
		echo 'Erro: ' . $e->getMessage();
	}
    }
	public function webservicelistaros($login, $senhacripto)
    {
	try	{
		$sql = "SELECT p.idProfissionalCampo,e.CidadeAtendida FROM profissionalcampo p join equipes e on p.idEquipes=e.idEquipe WHERE LoginProfissional = :login AND SenhaProfissional = :senha;";
		$stmt = Conexao::abrirConexao()->prepare($sql);
		$stmt->bindValue(':login', $login);
		$stmt->bindValue(':senha', $senhacripto);
		$stmt->execute();
		
		//se existir o usuario...
		if($linha = $stmt->fetch(PDO::FETCH_OBJ)) {

			//pega o id do usuario
			//$idusuario = $linha->idProfissionalCampo;
			$cidadeatendida = $linha->CidadeAtendida;

			//busca informações dele (consultas, reservas, compras...)
$sql = "Select a.ProtocoloAtendimento,a.TipoServicoAtendimento,a.DescServico,a.PrioridadeAtendimento,
a.StatusAtendimento,e.Bairro,e.Logradouro 
from atendimento a join clientes c on c.NumeroConta = a.NumeroContaCliente 
join enderecos e on e.idEndereco = c.idEndereco 
where e.Cidade= :cidadeatendida and a.StatusAtendimento != 'Em Andamento' and a.StatusAtendimento !='Fechado' order by a.PrioridadeAtendimento;";
			$stmt = Conexao::abrirConexao()->prepare($sql);
			//$stmt->bindValue(':idusuario', $idusuario);
			$stmt->bindValue(':cidadeatendida', $cidadeatendida);
			$stmt->execute();

			//cria o array e o popula
			$matriz = array();
			while($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
				$vetor['ProtocoloAtendimento']=$linha->ProtocoloAtendimento;
				$vetor['TipoServicoAtendimento']=$linha->TipoServicoAtendimento;
				$vetor['PrioridadeAtendimento']=$linha->PrioridadeAtendimento;
				$vetor['StatusAtendimento']=$linha->StatusAtendimento;
				$vetor['Bairro']=$linha->Bairro;
				$vetor['Logradouro']=$linha->Logradouro;
				
				array_push($matriz,$vetor);
			}		
			//retorna o json	
			return json_encode($matriz);
		}			
		return json_encode($matriz);
	}catch( PDOException $p) {
		echo 'Erro: ' . $p->getMessage();
	}catch( Exception $e) {
		echo 'Erro: ' . $e->getMessage();
	}
    }

    public function webservicehistorico($login, $senhacripto)
    {
	try	{
		$sql = "SELECT p.idProfissionalCampo,e.CidadeAtendida,p.idEquipes FROM profissionalcampo p join equipes e on p.idEquipes=e.idEquipe WHERE LoginProfissional = :login AND SenhaProfissional = :senha;";
		$stmt = Conexao::abrirConexao()->prepare($sql);
		$stmt->bindValue(':login', $login);
		$stmt->bindValue(':senha', $senhacripto);
		$stmt->execute();
		
		//se existir o usuario...
		if($linha = $stmt->fetch(PDO::FETCH_OBJ)) {

			//pega o id do usuario
			//$idusuario = $linha->idProfissionalCampo;
			$idEquipe = $linha->idEquipes;
			//$cidadeatendida = $linha->CidadeAtendida;

			//busca informações dele (consultas, reservas, compras...)
			$sql = "select a.ProtocoloAtendimento,DataAberturaAtendimento,DataFechamentoAtendimento,a.TipoServicoAtendimento,a.StatusAtendimento,o.ObsOS,o.Equipamentos,o.StatusOS from ordemservico o left join atendimento a on o.OSProtocoloAtendimento = a.ProtocoloAtendimento where o.idEquipes = :idequipe;";
			$stmt = Conexao::abrirConexao()->prepare($sql);
			//$stmt->bindValue(':idusuario', $idusuario);
			$stmt->bindValue(':idequipe', $idEquipe);
			$stmt->execute();

			//cria o array e o popula
			$matriz = array();
			while($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
				$vetor['ProtocoloAtendimento']=$linha->ProtocoloAtendimento;
				$vetor['DataAberturaAtendimento']=$linha->DataAberturaAtendimento;
				$vetor['DataFechamentoAtendimento']=$linha->DataFechamentoAtendimento;
				$vetor['TipoServicoAtendimento']=$linha->TipoServicoAtendimento;
				$vetor['StatusAtendimento']=$linha->StatusAtendimento;
				$vetor['ObsOS']=$linha->ObsOS;
				$vetor['Equipamentos']=$linha->Equipamentos;
				$vetor['StatusOS']=$linha->StatusOS;

				array_push($matriz,$vetor);
			}		
			//retorna o json	
			return json_encode($matriz);
		}			
		return json_encode($matriz);
	}catch( PDOException $p) {
		echo 'Erro: ' . $p->getMessage();
	}catch( Exception $e) {
		echo 'Erro: ' . $e->getMessage();
	}
    }
	
	
	
	public function webservicedetalhesos($login, $senhacripto, $protocolo)
    {
	try	{
		$sql = "SELECT p.idProfissionalCampo,e.CidadeAtendida,p.idEquipes FROM profissionalcampo p join equipes e on p.idEquipes=e.idEquipe WHERE LoginProfissional = :login AND SenhaProfissional = :senha;";
		$stmt = Conexao::abrirConexao()->prepare($sql);
		$stmt->bindValue(':login', $login);
		$stmt->bindValue(':senha', $senhacripto);
		$stmt->execute();
		
		//se existir o usuario...
		if($linha = $stmt->fetch(PDO::FETCH_OBJ)) {

			//pega o id do usuario
			//$idusuario = $linha->idProfissionalCampo;
			$idEquipe = $linha->idEquipes;
			$cidadeatendida = $linha->CidadeAtendida;

			//busca informações dele (consultas, reservas, compras...)
			$sql = "select a.*, c.TelefoneCliente,c.NomeCliente,e.NumeroCasa,e.Logradouro,e.Bairro,e.Cidade,e.Complemento from atendimento a join clientes c on c.NumeroConta = a.NumeroContaCliente join enderecos e on e.idEndereco = c.idEndereco where ProtocoloAtendimento = :protocolo";
			$stmt = Conexao::abrirConexao()->prepare($sql);
			//$stmt->bindValue(':idusuario', $idusuario);
			$stmt->bindValue(':protocolo', $protocolo);
			$stmt->execute();

			//cria o array e o popula
			$matriz = array();
			while($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
				$vetor['ProtocoloAtendimento']=$linha->ProtocoloAtendimento;
				$vetor['idAtendente']=$linha->idAtendente;
				$vetor['NumeroConta']=$linha->NumeroContaCliente;
				$vetor['DescServico']=$linha->DescServico;
				$vetor['OBSAtendimento']=$linha->OBSAtendimento;
				$vetor['StatusAtendimento']=$linha->StatusAtendimento;
				$vetor['DataAberturaAtendimento']=$linha->DataAberturaAtendimento;
				$vetor['HoraAberturaAtendimento']=$linha->HoraAberturaAtendimento;
				$vetor['TipoServicoAtendimento']=$linha->TipoServicoAtendimento;
				$vetor['PrioridadeAtendimento']=$linha->PrioridadeAtendimento;

				$vetor['TelefoneCliente']=$linha->TelefoneCliente;
				$vetor['NomeCliente']=$linha->NomeCliente;
				$vetor['NumeroCasa']=$linha->NumeroCasa;
				$vetor['Logradouro']=$linha->Logradouro;
				$vetor['Bairro']=$linha->Bairro;
				$vetor['Cidade']=$linha->Cidade;
				$vetor['Complemento']=$linha->Complemento;
				



				array_push($matriz,$vetor);
			}		
			//retorna o json	
			return json_encode($matriz);
		}			
		return json_encode($matriz);
	}catch( PDOException $p) {
		echo 'Erro: ' . $p->getMessage();
	}catch( Exception $e) {
		echo 'Erro: ' . $e->getMessage();
	}
    }
	
	
	
	public function webserviceaceitaros($login, $senhacripto, $protocolo, $dataabertura, $horaabertura)
    {
	try	{
		$sql = "SELECT p.idProfissionalCampo,e.CidadeAtendida,p.idEquipes FROM profissionalcampo p join equipes e on p.idEquipes=e.idEquipe WHERE LoginProfissional = :login AND SenhaProfissional = :senha;";
		$stmt = Conexao::abrirConexao()->prepare($sql);
		$stmt->bindValue(':login', $login);
		$stmt->bindValue(':senha', $senhacripto);
		$stmt->execute();
		
		//se existir o usuario...
		if($linha = $stmt->fetch(PDO::FETCH_OBJ)) {

			//pega o id do usuario
			//$idusuario = $linha->idProfissionalCampo;
			$idEquipe = $linha->idEquipes;
			//$cidadeatendida = $linha->CidadeAtendida;

			//busca informações dele (consultas, reservas, compras...)
			$sql = "UPDATE atendimento set StatusAtendimento='Em Andamento' where ProtocoloAtendimento=:protocolo;";
			$stmt = Conexao::abrirConexao()->prepare($sql);
			$stmt->bindValue(':protocolo', $protocolo);
			$stmt->execute();

			$sql = "Insert into ordemservico (idEquipes,OSProtocoloAtendimento,HoraAbertura,DataAbertura) VALUES (:idequipe,:protocolo,:horaabertura,:dataabertura);";
			$stmt = Conexao::abrirConexao()->prepare($sql);
			$stmt->bindValue(':idequipe', $idEquipe);
			$stmt->bindValue(':protocolo', $protocolo);
			$stmt->bindValue(':dataabertura', $dataabertura);
			$stmt->bindValue(':horaabertura', $horaabertura);
			$stmt->execute();
			$idOS = Conexao::abrirConexao()->lastInsertId();


			//cria o array e o popula
			$matriz = array();
			
				$vetor['idOS']=$idOS;
				array_push($matriz,$vetor);
					
			//retorna o json	
			return json_encode($matriz);
		}			
			return json_encode($matriz);
	}catch( PDOException $p) {
		echo 'Erro: ' . $p->getMessage();
	}catch( Exception $e) {
		echo 'Erro: ' . $e->getMessage();
	}
    }



	public function webserviceconcluiros($login, $senhacripto, $idos, $obs, $equipamentos, $statusos,$datafechamento,$horafechamento)
    {
	try	{
		$sql = "SELECT p.idProfissionalCampo,e.CidadeAtendida,p.idEquipes,p.NomeProfissional,e.NomeEquipe FROM profissionalcampo p join equipes e on p.idEquipes=e.idEquipe WHERE LoginProfissional = :login AND SenhaProfissional = :senha;";
		$stmt = Conexao::abrirConexao()->prepare($sql);
		$stmt->bindValue(':login', $login);
		$stmt->bindValue(':senha', $senhacripto);
		$stmt->execute();
		
		//se existir o usuario...
		if($linha = $stmt->fetch(PDO::FETCH_OBJ)) {

			
			$nomep = $linha->NomeProfissional;
			$cidadea = $linha->CidadeAtendida;
			$nomee = $linha->NomeEquipe;
			

			//busca informações dele (consultas, reservas, compras...)
			$sql = "UPDATE ordemservico SET Equipamentos = :equipamentos, ObsOS = :obsos, StatusOS =:statusos, HoraFechamento = :horafechamento, DataFechamento = :datafechamento where idOrdemServico= :idos;";
			$stmt = Conexao::abrirConexao()->prepare($sql);
			//$stmt->bindValue(':idusuario', $idusuario);
			//$stmt->bindValue(':idequipe', $idEquipe);
			//$stmt->bindValue(':protocolo', $protocolo);
			$stmt->bindValue(':equipamentos', $equipamentos);
			$stmt->bindValue(':obsos', $obs);
			$stmt->bindValue(':datafechamento', $datafechamento);
			$stmt->bindValue(':horafechamento', $horafechamento);
			$stmt->bindValue(':statusos', $statusos);
			$stmt->bindValue(':idos', $idos);


			

			$stmt->execute();

			//cria o array e o popula
			$matriz = array();
				$vetor['NomeProfissional']=$linha->NomeProfissional;
				$vetor['NomeEquipe']=$linha->NomeEquipe;
 			    $vetor['CidadeAtendida']=$linha->CidadeAtendida;
				array_push($matriz,$vetor);
					
			//retorna o json	
			return json_encode($matriz);
		}			
		return json_encode($matriz);
	}catch( PDOException $p) {
		echo 'Erro: ' . $p->getMessage();
	}catch( Exception $e) {
		echo 'Erro: ' . $e->getMessage();
	}
    }

    public function fecharAtendimento($protocolo, $datafechamento, $horafechamento){

        try
        {
            $SQL = "Update atendimento set StatusAtendimento = 'Fechado', DataFechamentoAtendimento = :datafechamento, HoraFechamento = :horafechamento where ProtocoloAtendimento= :protocolo";

            $p_sql = Conexao::abrirConexao()->prepare($SQL);
            $p_sql->bindValue(":protocolo", $protocolo);
			$p_sql->bindValue(":datafechamento", $datafechamento);
			$p_sql->bindValue(":horafechamento", $horafechamento);
            $p_sql->execute();

        //caso tudo de errado, retorna o exception do erro e so lamente
        }catch (Exception $e)
        {
            print "ERRO" . $e;
        
    }
    }
    
	public function descobrirStatus($protocolo){

		$sql = "select StatusAtendimento from atendimento where ProtocoloAtendimento = :protocolo;";
		$p_sql = Conexao::abrirConexao()->prepare($sql);
		$p_sql->bindValue(":protocolo", $protocolo);
		$p_sql->execute();

		return $p_sql->fetchall(PDO::FETCH_OBJ);

	}

	public function attStatus($status,$protocolo){

		$sql = "UPDATE atendimento set StatusAtendimento = :status where ProtocoloAtendimento = :protocolo;";
		$p_sql = Conexao::abrirConexao()->prepare($sql);
		$p_sql->bindValue(":status", $status);
		$p_sql->bindValue(":protocolo", $protocolo);
		$p_sql->execute();

		return $p_sql->fetchall(PDO::FETCH_OBJ);

	}

	public function NaoConcluido($protocolo)
    {
        try
        {
            $SQL = "Update atendimento set StatusAtendimento = 'Nao Concluido' where ProtocoloAtendimento= :protocolo;";

            $p_sql = Conexao::abrirConexao()->prepare($SQL);
            $p_sql->bindValue(":protocolo", $protocolo);

            $p_sql->execute();

            //caso tudo de errado, retorna o exception do erro e so lamente
        }catch (Exception $e)
        {
            print "ERRO" . $e;

        }
    }
	//fim método
}//fim da classe