<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="imgs/dolphin1.ico" type="image/x-icon" />
		<title> Sistema de Ensino Golfinho</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.min.css"> 
		<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	</head>


	<body>
		<header>
			<a <?php if(isset($_SESSION['login'])){ ?> href="?pagina=seg" <?php } else { ?> href="?pagina=home" <?php } ?> > <img src="imgs/dolphin1.png"> </a>
			

			<div id="menu" >
				<a href="?pagina=listadealunos">Lista de alunos</a>
				<a href="?pagina=consultarnotas">Consultar notas</a>
				<a href="?pagina=inserirnota">Inserir nota</a>

				<?php
					if(isset($_SESSION['login'])){
				?>
						<a href="logout.php"> <?php echo $_SESSION['usuario']; ?> (Sair) </a>
				<?php
					}
				?>

			</div>

		</header>

		<div id="conteudo", class="container1"> 
