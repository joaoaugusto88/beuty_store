<?php

include "conexaobanco.php";

if(isset($_GET['id']) && $_GET['id'] != "")
{
	$id = $_GET['id'];
	$sql = "SELECT * FROM produto WHERE id=$id";

	$resultado = mysqli_query($conexaobanco, $sql);

	$informacoes_produto = mysqli_fetch_array($resultado);


}
else
{
	echo "erro.";
}
mysqli_close($conexaobanco);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar produto</title>
</head>
<body>
	<h1>Editar produto</h1>
<FORM action="editado.php" method="POST">
		<label>ID:</label>
		<input type="text" readonly="true " name="id" value="<?php echo $informacoes_produto['id']  ?>" > <br> <br>
		<label>Descrição:</label>
		<input type="text" name="descricao" value="<?php echo $informacoes_produto['descricao']  ?>" > <br> <br>
		<label>Preço:</label>
		<input type="text" name="preco" value="<?php echo $informacoes_produto['preco']  ?>" > <br> <br>

		<input type="submit" name="editar" value="Editar">
		
</FORM>
<br>
<a href="lista_produtos.php">Lista</a>
</body>
</html>

