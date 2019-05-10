<div id="tituloHOME">
<h1> Escolha o curso </h1>
</div>
<form method="POST" action="">
	<br>
	 <input class="form-check-input" type="radio" name="nome_curso" value="2" > Ciência da Computação <br><br>
	 <input class="form-check-input" type="radio" name="nome_curso" value="1" > Sistemas de Informação <br><br>
	 <input class="form-check-input" type="radio" name="nome_curso" value="4" > Análise de Sistemas <br><br>
	 <input class="form-check-input" type="radio" name="nome_curso" value="3" > Engenharia da Computação <br><br>
	 <input type="submit" value="  Buscar  " class="btn btn-primary" ><br><br>
 <form>

<br>

<?php

	if(isset($_POST['nome_curso']))
    {
   
       $curso_escolhido = $_POST['nome_curso'];

?>

<table id="notas">

		<thead>
			<tr>	
				<th> ID </th>
				<th> Nome do Aluno</th>
				<th> Descrição </th>
				<th> Nota </th>
				<th> Deletar </th>
			</tr>
		</thead>

		<tbody>
			<?php

				include 'C:\xampp\htdocs\app\db.php';

					while ($linha = mysqli_fetch_array($consulta_nota)){
						if ($linha['id_curso'] == $curso_escolhido){
							echo '<tr>';
							echo '<td>';
							echo $linha['id_aluno'];
							echo '</td>';
							echo '<td>';
							echo $linha['nome_aluno'];
							echo '</td>';
							echo '<td>';
							echo $linha['descricao'];
							echo '</td>';
							echo '<td>';
							echo $linha['nota_valor'];
							echo '</td>';
						
						?>

						<td><a href="deletaNota.php?id_nota=<?php echo $linha['id_nota']; ?>">
							<id class="fas fa-trash-alt">
						</a></td></tr>



						<?php
						}
					}
					
			}
			?>

		</tbody>

</table>