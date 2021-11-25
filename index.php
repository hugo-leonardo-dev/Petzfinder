<?php

include 'db.php';

include 'header.php';

if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}
else{
	$pagina = 'home';
}

switch($pagina){
    case 'usuarios': include 'views/usuarios.php'; break;
    case 'gatos': include 'views/gatos.php'; break;
    case 'registrar_gato': include 'views/registrar_gato.php'; break;
    case 'registrar_user': include 'views/registrar_user.php'; break;
    default: include 'views/home.php'; break;
}

#footer