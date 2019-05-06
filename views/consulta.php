<div id="tituloHOME">
<h1> Escolha o curso </h1>
</div>
<form method="POST" action="proc/consultaQuery.php">
	<br>
	 <input type="radio" name="nome_curso" value="CC" > Ciência da Computação <br><br>
	 <input type="radio" name="nome_curso" value="SI" > Sistemas de Informação <br><br>
	 <input type="radio" name="nome_curso" value="SI" > Análise de Sistemas <br><br>
	 <input type="radio" name="nome_curso" value="SI" > Engenharia da Computação <br><br>
	 <input type="submit" value="  Buscar  "><br><br>
 <form>




<table style = "border:2px solid #ccc; width:100%"; >
	<tr>	
		<th> ID </th>
		<th> Nome do Aluno</th>
		<th> Curso </th>
	</tr>



	<?php

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
	?>


</table>