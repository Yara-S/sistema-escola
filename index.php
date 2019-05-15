<?php 
session_start();

include 'header.php';
include 'db.php';


if(isset($_SESSION['login'])){
	if (isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'seg';
	}
}

else {
	$pagina = 'home';
}


switch($pagina){
	case 'seg': include 'seg.php';
		break;
	case 'listadealunos': include 'views/consulta.php'; break;
	case 'consultarnotas': include 'views/verNota.php'; break;
	case 'inserirnota': include 'views/inserirNota.php'; break;
	default: include 'home.php'; break;

}




include 'footer.php';




?>