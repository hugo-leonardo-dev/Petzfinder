<?php
include '..\db.php';
?>
<a href="?pagina=registrar_gato">Inserir novo gato</a>

<table class= "table-borderless table-dark">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Raça</th>
            <th>Cor</th>
            <th>Dono</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($row = mysqli_fetch_array($print_gatos)){
                echo '<tr><td>'.$row['nome_gato'].'</td>';
                echo '<td>'.$row['idade_gato'].'</td>';
                echo '<td>'.$row['raca_gato'].'</td>';
                echo '<td>'.$row['cor_gato'].'</td>';
                echo '<td>'.$row['dono_gato'].'</td></tr>';
            }
        ?>
    </tbody>
</table>
