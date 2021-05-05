<?php  

if ((isset($_POST['descricao'])) && ($_POST['descricao'] != "") && (isset($_POST['preco'])) && ($_POST['preco'] != "")) 
{
	$id = $_POST['id'];
	$descricao = $_POST['descricao'];
	$preco = $_POST['preco'];

	$sql = "UPDATE produto 
	SET descricao = '$descricao', preco = '$preco' WHERE id = $id";

 
	include "conexaobanco.php";
	$resultado_edicao = mysqli_query($conexaobanco, $sql);

	mysqli_close($conexaobanco);
	if($resultado_edicao)
	{
		echo "Edição executada com suceso <a href=\"lista_produtos.php\">Vizualizar produtos</a>";
	}
	else
	{
		echo "Houve um problema na edição";
	}
}
else
{
	echo "Erro";
}

?>	