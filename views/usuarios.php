<?php
include 'db.php';
?>
<a href="?pagina=registrar_user">Inserir novo gato</a>

<table class ="table table-hover">
    <thead>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>E-mail</th>
            <th>Endereço</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($row = mysqli_fetch_array($print_users)){
                echo '<tr><td>'.$row['nome_user'].'</td>';
                echo '<td>'.$row['cpf_user'].'</td>';
                echo '<td>'.$row['email_user'].'</td>';
                echo '<td>'.$row['endereco_user'].'</td>';
            }
        ?>
    </tbody>
</table>
