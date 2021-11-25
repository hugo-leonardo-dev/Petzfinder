<?php

include ("db.php");

$nome_gato = $_POST['nome_gato'];
$idade_gato = $_POST['idade_gato'];
$raca_gato =$_POST['raca_gato'];
$cor_gato =$_POST['cor_gato'];
$dono_gato =$_POST['dono_gato'];


$query = "INSERT INTO GATOS (nome_gato, idade_gato, raca_gato, cor_gato, dono_gato) VALUES ('$nome_gato', '$idade_gato', '$raca_gato', '$cor_gato', '$dono_gato')";

mysqli_query($conn, $query);