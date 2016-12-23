<title>Cadastro de Equipe</title>
<?php
//vai chamar o cabecalho da pagina
require_once '../layout/cabecalho.php';
include_once '../controle/ctrlListarEquipes.php'

?>


<?php
####### Aqui onde fica a mensagem/modal/popup e confirmação #########
if (isset($_SESSION['NomeCadastrado'])) : ?>

<script type="text/javascript">
    swal({
        title: "Sucesso",
        text: "A Equipe: <?php echo $_SESSION['NomeCadastrado']; ?> foi cadastrado com sucesso!",
        type: "success",
        confirmButtonText: "Fechar",
        allowEscapeKey: true
    });
</script>

<?php
//destroi a super global para nao ficar mostrando a mensagem toda hora, mesmo atualizando a pagina
unset($_SESSION['NomeEquipe']);
unset($_SESSION['NomeCadastrado']);

endif;

########### Fim da mensagem de confirmação
?>




<title>Cadastro de funcionario</title>
<div class='container'>


	<form action="../controle/ctrlCadastrarEquipe.php" method=POST >
		<h2>Cadastro de Equipe</h2>
                <!--  NOME DA EQUIPE   -->
               <div class="row">
                    <label>Nome da Equipe</label>
                    <input type="text" name="nome_da_equipe" class="form-control" id="NomeEquipe">
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
                    <select name="cidade_atendida" class="form-control" id="cidade">
                    
                    <?php foreach ($listagemcdd as $i) : ?>
                        <option value="<?php echo $i->cidade ?>"><?php echo $i->cidade ?></option>
                    <?php endforeach ?>
                    </select>
                </div>


                <br><br>
                <button class='btn btn-primary btn-block'>Cadastrar Equipe</button>


	</form>


</div>

<?php include '../layout/rodape.html' ?>