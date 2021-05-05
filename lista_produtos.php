<?php 

include "conexaobanco.php";

$sql = "SELECT * from produto";
$resultado = mysqli_query($conexaobanco, $sql);

mysqli_close($conexaobanco);
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>lista_produtos</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Produtos</h1>
	<table>
		<tr>
			<th>ID:</th>
			<th>Descrição:</th>
			<th>Preço:</th>
			

			<?php 
				while ($valor = mysqli_fetch_array($resultado)) {
					
					echo "<tr>";
					echo "<td>".$valor['id']."</td>";
					echo "<td>".$valor['descricao']."</td>";
					echo "<td>".$valor['preco']."</td>";
					echo "<th> <a href=\"deletado.php?id={$valor['id']}\" >Deletar</a>   </th>";
					echo "<th> <a href=\"editar.php?id={$valor['id']}\">Editar</a> </th>";
					echo "</tr>";
					
 }
			 ?>

			
		</tr>
	</table>
	<br> <a href="escolher_funcao.php"> Voltar </a>
</body>
</html>