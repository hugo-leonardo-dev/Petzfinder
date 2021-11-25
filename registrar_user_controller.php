<?php

include ("db.php");

$nome_user = $_POST['nome_user'];
$cpf_user = $_POST['cpf_user'];
$email_user = $_POST['email_user'];
$endereco_user = $_POST['endereco_user'];

$query = "INSERT INTO USERS (nome_user, cpf_user, email_user, endereco_user) VALUES ('$nome_user' , '$cpf_user', '$email_user', '$endereco_user')";

mysqli_query($conn, $query);
