<?php
    //Controller para trabalhar com os dados do resultado
    //que sao obtidos atravez de um id param get id
    require_once '../layout/cabecalho.php';

    require_once '../controle/ctrlDetalhesEquipe.php';

    //aqui listo todos os funcionarios e uso para dar um cheked no select
    require_once '../controle/ctrlListarEquipes.php';

    require_once '../controle/ctrlAlterarDadosEquipe.php';
?>


<div class='container'>
    <h2>Dados da Equipe</h2>

    <form method="POST" action="" >


    <!--  NOME DA EQUIPE   -->
    <div class="row">
        <label>Nome da Equipe</label>
        <input type="text" name="nome" value="<?php echo $Detalhes[0]->NomeEquipe ?>" class="form-control" >
    </div>


    <div class="row">
        <?php foreach($Detalhes as $Key => $Valor) : ?>

            <label>Funcionario </label>
               	<select name="funcionario<?php echo $Key ?>" class="form-control" id="funcionario1">
               		<option value="0"> Selecione Funcionario... </option>

                   		<?php foreach ($listagem as $i) : ?>
                            <?php
                                //aqui é usado para carregar os valores('que sao os id do funcionario') e assim eu posso usalos no update
                                //junto com o foreach e dar update

                                $ID[ $i->idProfissionalCampo] = $i->idProfissionalCampo; ?>

                                <option value="
                        					<?php echo $i->idProfissionalCampo ?>"  
                        				    <?php
                        					echo $i->NomeProfissional == $Detalhes[$Key]->NomeProfissional ? 'selected' : "";  
                        				    ?>
                                />

                                <?php echo $i->NomeProfissional ?>
                        		</option>

                    		<?php endforeach ?>

                </select>
                <br>

        <?php endforeach; ?>



        <label>Cidade Atendida</label>
        <input type="text" name="cidade" value="<?php echo $Detalhes[0]->CidadeAtendida ?>" class="form-control">
        <br><br>

        <button class='btn btn-primary btn-block'>Editar Equipe</button>

</div>

</div>



<?php include '../layout/rodape.html' ?>