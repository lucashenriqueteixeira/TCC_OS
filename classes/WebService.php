<?php
require_once "conexao.php";
class DaoUsuarios
{

    public function webservice($login, $senhacripto)
    {
	try	{
		$sql = "SELECT idProfissionalCampo FROM profissionalcampo WHERE LoginProfissional = :email AND SenhaProfissional = :senha;";
		$stmt = Conexao::abrirConexao()->prepare($sql);
		$stmt->bindValue(':email', $login);
		$stmt->bindValue(':senha', $senhacripto);
		$stmt->execute();
		
		//se existir o usuario...
		if($linha = $stmt->fetch(PDO::FETCH_OBJ)) {

			//pega o id do usuario
			$idusuario = $linha->idProfissionalCampo;

			//busca informações dele (consultas, reservas, compras...)
			$sql = "SELECT * FROM profissionalcampo WHere idProfissionalCampo = '$idusuario';";
			$stmt = Conexao::abrirConexao()->prepare($sql);
			$stmt->bindValue(':idusuario', $idusuario);
			$stmt->execute();

			//cria o array e o popula
			$matriz = array();
			while($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
				$vetor['NomeProfissional']=$linha->NomeProfissional;
				$vetor['idProfissionalCampo']=$linha->idProfissionalCampo;
				$vetor['CPFProfissional']=$linha->CPFProfissional;
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
    }//fim método
}//fim da classe