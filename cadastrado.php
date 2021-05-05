<?php  

if (isset($_POST['descricao']) && $_POST['descricao'] != "" && isset($_POST['preco']) && $_POST['preco'] != "") 
{
	$descricao = $_POST['descricao'];
	$preco = $_POST['preco'];

	$sql = "INSERT INTO produto (descricao, preco) VALUES ('$descricao', '$preco')";

	include "conexaobanco.php";

	

	

	$retorno = mysqli_query($conexaobanco, $sql);

	if($retorno)
	{
		echo "Produto cadastrado com sucesso. <a href=\"lista_produtos.php\">Vizualizar produtos</a>";
		
	}
	else
	{
		echo "Não foi possível cadastrar produto.";
	}
	mysqli_close($conexaobanco);
}
else
{
	echo "Tente novamente";
}


?>