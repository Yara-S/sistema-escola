<?php

$servidor = "localhost";
$usuario = "root";  
$senha = "";
$database = "escola";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$query = "CREATE TABLE alunos (id_aluno int not null auto_increment primary key, nome_aluno varchar(40), nascimento date, bairro varchar(40))";

$query2 = "CREATE TABLE cursos (id_curso int not null auto_increment primary key, nome_curso varchar(40), ch int)";

$query3 = "CREATE TABLE aluno_curso (id_aluno_curso int not null auto_increment primary key, id_aluno int not null, id_curso int not null)";

$execucao = mysqli_query($conexao, $query); 
$execucao2 = mysqli_query($conexao, $query2);  
$execucao3 = mysqli_query($conexao, $query3); 


if ($execucao ==1 and $execucao2==1 and $execucao3==1){
	echo "Tabelas criadas";
}


$query = "INSERT INTO alunos (nome_aluno, nascimento, bairro) values ('Jorge Silva', '1999-11-12','Cambuci'), ('Maria Juliana', '1998-09-30','Vila Olimpia')";

$query2 = "INSERT INTO cursos (nome_curso, ch) values ('Sistemas da Informacao', '400'), ('Ciencia da Computacao', '400'), ('Engenharia da Computacao', '500'), ('Analise de Sistemas','350')";

$query3 = "INSERT INTO aluno_curso (id_aluno, id_curso) values (1,1), (2,2)";



$execucao = mysqli_query($conexao, $query); 
$execucao2 = mysqli_query($conexao, $query2);  
$execucao3 = mysqli_query($conexao, $query3); 




$query = "CREATE TABLE notas (id_nota int not null auto_increment primary key, id_aluno_curso int not null, descricao varchar(40), nota_valor decimal(10,2))";
$execucao = mysqli_query($conexao, $query); 

$query = "INSERT INTO alunos (nome, nascimento, bairro) values ('Carla Matos', '2000-03-15','Se'), ('Lucas Seixas', '1997-01-29','Liberdade'), ('Jessica Brito', '1998-02-02','Pinheiros'), ('Victor Silveira', '1996-05-07','Vila Mariana'), ('Luciano Rocha', '1999-07-23','Vila Prudente')";
$execucao = mysqli_query($conexao, $query); 

$query = "INSERT INTO aluno_curso (id_aluno, id_curso) values (3,3), (4,4), (5,1), (6,2), (7,3)";
$execucao = mysqli_query($conexao, $query); 

$query = "INSERT INTO notas (id_aluno_curso, descricao, nota_valor) values (1, 'P1', 8.7), (2, 'P1', 0.7)(3, 'P1', 7.2),(4, 'P1', 3.7),(5, 'P1', 5.0),(6, 'P1', 6.1),(7, 'P1', 9.8)";

?>