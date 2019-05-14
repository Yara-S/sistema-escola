<?php

include 'db.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$query = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha'";

$auth = mysqli_query($conexao, $query);

if (mysqli_num_rows($auth) == 1){
	echo 'Deu certo';
}
else
{
	echo 'Nao deu certo';
}

?>