<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Produtos</title>
	<link rel="stylesheet" type="text/css" href="cadastro.css">
</head>
<body>

	<h1>Cadastrar Produto</h1>

	<FORM action="cadastrado.php" method="POST">
		<label>Descrição:</label>
		<input type="text" name="descricao" required="true"> <br> <br>
		<label>Preço:</label>
		<input type="text" name="preco" required="true"> <br> <br>

		<input type="submit" name="cadastrar" value="Cadastrar">
	</FORM>
	<br> <a href="escolher_funcao.php"> Voltar </a>

</body>
</html>