<?php

    include '..\db.php';

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
        <h1>Registrar usuario</h1>
        <form action="..\registrar_user_controller.php" method="POST">
            <input type="text" name="nome_user" placeholder="Nome: "> 
            <br>
            <input type="text" name="cpf_user" placeholder="CPF: ">
            <br>
            <input type="email" name="email_user" placeholder="E-mail: ">
            <br>
            <input type="text" name="endereco_user" placeholder="Endereço: ">
            <br>
            <input type="submit" name="submit" value="Salvar">
        </form>
    </div>


</body>
</html>