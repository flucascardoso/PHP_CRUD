<a class="btn btn-dark" href="?pagina=inserir_curso">Inserir Novo Curso</a><br><br>

<table class="table" id="cursos">
    <thead>
        <tr>
            <th>Nome Curso</th>
            <th>Carga Horária(horas)</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

<tbody>
    <?php
        while($linha = mysqli_fetch_array($consulta_cursos)){
            echo '<tr><td>'.$linha['nome_curso'].'</td>';
            echo '<td>'.$linha['carga_horaria'].'</td>';
    ?>
        <td><a class="btn btn-success" href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso'];?>">Editar</a></td>
        <td><a class="btn btn-success" href="deletar_curso.php?id_curso=<?php echo $linha['id_curso'];?>">Deletar</a></td></tr>
    <?php
     }    
    ?>
</tbody>



</table>