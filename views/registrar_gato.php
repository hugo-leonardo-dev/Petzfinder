<?php
    include 'db.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petzfinder</title>
</head>
<body>
    
    <div>
        <h1>Registrar gato</h1>
        <form action="..\registrar_gato_controller.php" method="POST">
            <input type="text" name="nome_gato" placeholder="Nome: "> 
            <br>
            <input type="date" name="idade_gato"placeholder="Idade: ">
            <br>
            <input type="text" name="raca_gato"placeholder="Raça: ">
            <br>
            <input type="text" name="cor_gato"placeholder="Cor: ">
            <br>
            <input type="text" name="dono_gato"placeholder="Dono: ">
            <br>
            <input type="submit" name="submit" value="Salvar">
        </form>
    </div>


</body>
</html>