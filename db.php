<?php

$s = "localhost"; 
$u = "root";
$p = "";
$db = "petzfinder";

$conn = mysqli_connect($s, $u, $p, $db);

$query = "SELECT * FROM GATOS";
$print_gatos = mysqli_query($conn, $query);

$query = "SELECT * FROM USERS";
$print_users = mysqli_query($conn, $query);