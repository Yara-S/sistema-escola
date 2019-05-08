<?php
include 'C:\xampp\htdocs\app\db.php';

$id_nota = $_GET['id_nota'];
//echo $id_nota;

$aux = "DELETE FROM notas where id_nota='$id_nota' ";

mysqli_query($conexao, $aux);

header('location:index.php?pagina=consultarnotas');
?>