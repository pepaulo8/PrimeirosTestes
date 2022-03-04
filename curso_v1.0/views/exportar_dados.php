<h1>Exportação de dados</h1>


<form method="post" action="processa_exportacao.php">
	<br>
	<p>Quais dados deseja exportar?</p>
	<select name="tabela">
		<option>Dados</option>
		<?php 
		while($linha = mysqli_fetch_array($consulta_tabelas)){
			echo '<option value="'.$linha['TABLE_NAME'].'">'.$linha['TABLE_NAME'].'</option>';
		}
		?>
	</select>

	<br><br>

	<input type="submit" value="Exportar dados">
</form>