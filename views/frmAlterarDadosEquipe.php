<title>Editar Equipe</title>

<?php
//vai chamar o cabecalho da pagina
require_once '../layout/cabecalho.php';
include_once '../controle/ctrlListarEquipes.php'

?>

<div class='container'>


	<form action="../controle/" method='POST' >
		<h2>Alterar de Equipe</h2>
                <!--  NOME DA EQUIPE   -->
               <div class="row">
                    <label>Nome da Equipe</label>
                    <input type="text" name="nome" class="form-control" id="NomeEquipe">
                </div>

                <div class="row">
                    <label>Funcionario1</label>
                    <select name="funcionario1" class="form-control" id="funcionario1">
                    <option value="0"> Selecione Funcionario... </option>
                    <?php foreach ($listagem as $i) : ?>
                        <option value="<?php echo $i->idProfissionalCampo ?>"><?php echo $i->NomeProfissional ?></option>
                    <?php endforeach ?>
                    </select>
                    
                </div>
                <!-- //NOME DA EQUIPE  -->

                <div class="row">
                    <label>Funcionario2</label>
                    <select name="funcionario2"class="form-control" id="funcionario2">
                    <option value="0"> Selecione Funcionario... </option>
                    <?php foreach ($listagem as $i) : ?>
                        <option value="<?php echo $i->idProfissionalCampo ?>"><?php echo $i->NomeProfissional ?></option>
                    <?php endforeach ?>
                    </select>
                </div>


                <div class="row">
                    <label>Funcionario3</label>
                    <select name="funcionario3" class="form-control" id="funcionario3">
                    <option value="0"> Selecione Funcionario... </option>
                    <?php foreach ($listagem as $i) : ?>
                        <option value="<?php echo $i->idProfissionalCampo ?>"><?php echo $i->NomeProfissional ?></option>
                    <?php endforeach ?>
                    </select>
                </div>


                <div class="row">
                    <label>Funcionario4</label>
                    <select name="funcionario4" class="form-control" id="funcionario4">
                    <option value="0"> Selecione Funcionario... </option>
                    <?php foreach ($listagem as $i) : ?>
                        <option value="<?php echo $i->idProfissionalCampo ?>"><?php echo $i->NomeProfissional ?></option>
                    <?php endforeach ?>
                    </select>
                </div>


                <div class="row">
                    <label>Cidade Atendida</label>
                    <select name="cidade" class="form-control" id="cidade">
                    
                    <?php foreach ($listagemcdd as $i) : ?>
                        <option value="<?php echo $i->cidade ?>"><?php echo $i->cidade ?></option>
                    <?php endforeach ?>
                    </select>
                </div>


                <br><br>
                <button name='editar' class='btn btn-primary btn-block'>Editar Equipe</button>


	</form>


</div>

<br>
<span><center class='alert alert-info'>Criado e desenvolvido por Lucas Henrique, Estevão Marlon, Pablo, Gustavo e Anderson</center></span>