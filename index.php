<?php 

include 'header.php';
include 'db.php';

if (isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}
else {
	$pagina = 'home';
}

if ($pagina == 'listadealunos'){
	include 'views/consulta.php';
}
else if ($pagina == 'consultarnotas'){
	include 'views/verNota.php';
}
else if ($pagina == 'inserirnota'){
	include 'views/inserirNota.php';
}
else {
	include 'home.php';
}



include 'footer.php';






/*


echo '<table style = "width:100%" border = 1>
	<tr>	
		<th> id </th>
		<th> nome </th>
		<th> curso </th>
	</tr>';


$consulta = mysqli_query($conexao, "SELECT alunos.id_aluno, alunos.nome_aluno, cursos.nome_curso FROM alunos, cursos, aluno_curso where alunos.id_aluno = aluno_curso.id_aluno and cursos.id_curso = aluno_curso.id_curso");




while ($linha = mysqli_fetch_array($consulta)){
	echo '<tr>';
	echo '<td>';
	echo $linha['id_aluno'];
	echo '</td>';
	echo '<td>';
	echo $linha['nome_aluno'];
	echo '</td>';
	echo '<td>';
	echo $linha['nome_curso'];
	echo '</td>';
	echo '</tr>';
}


echo '</table>';

*/

?>