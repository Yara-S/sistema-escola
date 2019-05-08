<?php
include 'C:\xampp\htdocs\app\db.php';

$id_aluno = $_POST['escolha_aluno'];
$nota = $_POST['nota'];
$desc = $_POST['desc'];
$aux = "SELECT alunos.id_aluno, cursos.id_curso, aluno_curso.id_aluno_curso FROM aluno_curso, cursos, alunos where aluno_curso.id_aluno = alunos.id_aluno and aluno_curso.id_curso = cursos.id_curso and alunos.id_aluno = '$id_aluno'";



$query_curso_aluno = mysqli_query($conexao, $aux);
$linha = mysqli_fetch_array($query_curso_aluno);
$id_aluno_curso = $linha['id_aluno_curso'];

$aux = "INSERT INTO notas (id_aluno_curso, descricao, nota_valor) VALUES ('$id_aluno_curso', '$desc', '$nota') ";

mysqli_query($conexao, $aux);

header('location:index.php?pagina=inserirnota');
?>