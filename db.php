<?php

$servidor = "localhost";
$usuario = "app";
$senha = "Admin123";
$db = "escola";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$consulta_alunos = mysqli_query($conexao, "SELECT alunos.id_aluno, alunos.nome_aluno, cursos.nome_curso, cursos.id_curso FROM alunos, cursos, aluno_curso where alunos.id_aluno = aluno_curso.id_aluno and cursos.id_curso = aluno_curso.id_curso");

$consulta_nota = mysqli_query($conexao, "SELECT alunos.id_aluno, alunos.nome_aluno, notas.descricao, notas.nota_valor, cursos.id_curso , notas.id_nota FROM alunos, cursos, aluno_curso, notas where alunos.id_aluno = aluno_curso.id_aluno and cursos.id_curso = aluno_curso.id_curso and notas.id_aluno_curso = aluno_curso.id_aluno_curso");

$consulta_cursos = mysqli_query($conexao, "SELECT * FROM cursos");