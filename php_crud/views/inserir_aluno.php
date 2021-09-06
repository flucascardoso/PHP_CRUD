<?php if(!isset($_GET['editar'])){?>

<h1>Inserir Novo Aluno</h1>

<form method="post" action="processa_aluno.php">
    <br>
    <label for="">Nome Aluno</label><br>
    <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno"><br><br>
    <label for="">Data de Nascimento</label><br>
    <input class="form-control" type="text" name="data_nascimento" placeholder="Insira a Data de Nascimento"><br><br>
    <input class="btn btn-success" type="submit" value="Inserir Aluno">

</form>

<?php } else { ?>

<?php while($linha = mysqli_fetch_array($consulta_alunos)){ ?>
    <?php if($linha['id_aluno'] == $_GET['editar']){ ?>
<h1>Editar Aluno</h1>

<form  method="post" action="editar_aluno.php">
    <input  type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno'];?>">
<br>
        <label for="">Nome Curso</label><br>
    <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome_aluno'];?>"><br><br>
        <label for="">Carga Horária</label><br>
    <input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento" value="<?php echo $linha['data_nascimento'];?>"><br><br>
    <input class="btn btn-success" type="submit" value="Editar aluno">

</form>
<?php } ?>
<?php } ?>
<?php } ?>