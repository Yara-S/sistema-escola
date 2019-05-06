$servidor = "localhost";
$usuario = "root";  
$senha = "";
$database = "escola";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$query = "CREATE TABLE alunos (id_aluno int not null auto_increment primary key, nome varchar(40), nascimento date, bairro varchar(40))";

$query2 = "CREATE TABLE cursos (id_curso int not null auto_increment primary key, nome varchar(40), ch int)";

$query3 = "CREATE TABLE aluno_curso (id_aluno_curso int not null auto_increment primary key, id_aluno int not null, id_curso int not null)";

$execucao = mysqli_query($conexao, $query); 
$execucao2 = mysqli_query($conexao, $query2);  
$execucao3 = mysqli_query($conexao, $query3); 


if ($execucao ==1 and $execucao2==1 and $execucao3==1){
	echo "Tabelas criadas";
}


$query = "INSERT INTO alunos (nome, nascimento, bairro) values ('Jorge Silva', '1999-11-12','Cambuci'), ('Maria Juliana', '1998-09-30','Vila Olimpia')";

$query2 = "INSERT INTO cursos (nome, ch) values ('Sistemas da Informacao', '400'), ('Ciencia da Computacao', '400'), ('Engenharia da computacao', '500'), ('Analise de Sistemas','350')";

$query3 = "INSERT INTO aluno_curso (id_aluno, id_curso) values (1,1), (2,2)";


$query = "UPDATE cursos set nome = 'Engenharia da Computacao' where nome = 'Engenharia da computacao'";
$execucao = mysqli_query($conexao, $query); 
#$execucao2 = mysqli_query($conexao, $query2);  
#$execucao3 = mysqli_query($conexao, $query3); 

