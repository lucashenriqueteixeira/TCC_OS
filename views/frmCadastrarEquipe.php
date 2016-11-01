<title>Cadastro de Equipe</title>
<?php
//vai chamar o cabecalho da pagina
require_once '../layout/cabecalho.php';
    /*
    if($_SESSION['id'] == session_id()){
			
			if($_SESSION['cargo'] == "Administrador"){
				
			}
			else{
                            header ('location: index.php');
                        }
		}
		
		else{
			header ('location: index.php');
		}
        */

?>
<title>Cadastro de funcionario</title>
<div class='container'>
	<form>
		<h2>Cadastro de Equipe</h2>
                
               <div class="row">
                    <label>Nome da Equipe</label>
                    <input type="text" name="nome_da_equipe" class="form-control" id="NomeEquipe">
                </div>
                <div class="row">
                    <label>Funcionario1</label>
                    <select name="funcionario1" class="form-control" id="funcionario1">
                    <option value="Func1">Func1</option>
                    <option value="Func2">Func2</option>
                    <option value="Func3">Func3</option>
                    <option value="Func4">Func4</option>
                    </select>
                    
                </div>
                <div class="row">
                    <label>Funcionario2</label>
                    <select name="funcionario2"class="form-control" id="funcionario2">
                    <option value="Func1">Func1</option>
                    <option value="Func2">Func2</option>
                    <option value="Func3">Func3</option>
                    <option value="Func4">Func4</option>
                    </select>
                </div>
                <div class="row">
                    <label>Funcionario3</label>
                    <select name="funcionario3" class="form-control" id="funcionario3">
                    <option value="Func1">Func1</option>
                    <option value="Func2">Func2</option>
                    <option value="Func3">Func3</option>
                    <option value="Func4">Func4</option>
                    </select>
                </div>
                <div class="row">
                    <label>Funcionario4</label>
                    <select name="funcionario4" class="form-control" id="funcionario4">
                    <option value="Func1">Func1</option>
                    <option value="Func2">Func2</option>
                    <option value="Func3">Func3</option>
                    <option value="Func4">Func4</option>
                    </select>
                </div>
                <div class="row">
                    <label>Cidade Atendida</label>
                    <select name="cidade_atendida" class="form-control" id="cidade">
                    <option value="Cidade1">Cidade1</option>
                    <option value="Cidade2">Cidade2</option>
                    <option value="Cidade3">Cidade3</option>
                    <option value="Cidade4">Cidade4</option>
                    </select>
                </div>
                <br><br>
                <button class='btn btn-primary btn-block'>Cadastrar Equipe</button>
	</form>

<br><br>
<span><center class='alert alert-info'>Criado e desenvolvido por Lucas Henrique, Estevão Marlon, Pablo, Gustavo e Anderson</center></span>

</div>