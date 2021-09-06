<a  class="btn btn-dark" href="?pagina=inserir_aluno">Inserir Novo Aluno</a><br><br>
<table class="table" id="alunos">
    <thead>
        <tr>
            <th>Nome Aluno</th>
            <th>Data Nascimento</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
<tbody>
    <?php
        while($linha = mysqli_fetch_array($consulta_alunos)){
            echo '<tr><td>'.$linha['nome_aluno'].'</td>';
            echo '<td>'.$linha['data_nascimento'].'</td>';
    ?>
            <td><a class="btn btn-success" href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno'];?>">Editar</a></td>
            <td><a class="btn btn-success" href="deletar_aluno.php?id_aluno=<?php echo $linha['id_aluno'];?>">Deletar</a></td></tr>
        <?php
         }    
        ?>
</tbody>
    
</table>

