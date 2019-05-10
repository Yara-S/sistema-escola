<div id="tituloHOME">
<h1> Escolha o curso </h1>
</div>
<form method="POST" action="">
	<br>
	 <input class="form-check-input" type="radio" name="nome_curso" value="2" > Ciência da Computação <br><br>
	 <input class="form-check-input" type="radio" name="nome_curso" value="1" > Sistemas de Informação <br><br>
	 <input class="form-check-input" type="radio" name="nome_curso" value="4" > Análise de Sistemas <br><br>
	 <input class="form-check-input" type="radio" name="nome_curso" value="3" > Engenharia da Computação <br><br>
	 <input type="submit" value="  Buscar  " class="btn btn-primary"><br><br>
 <form>



<?php

	if(isset($_POST['nome_curso']))
    {
   
       $curso_escolhido = $_POST['nome_curso'];

?>

	<table id="alunos" >
		<thead>

			<tr>	
				<th> ID </th>
				<th> Nome do Aluno</th>
				<th> Curso </th>
			</tr>

		</thead>

		<tbody>

<?php

	

		while ($linha = mysqli_fetch_array($consulta_alunos)){
			if ($linha['id_curso'] == $curso_escolhido){
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
		}
		
}
?>
</tbody>

</table>