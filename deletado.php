<?php

if (isset($_GET['id']) && $_GET['id'] != "") 
{
	$idProduto = $_GET['id'];

	include "conexaobanco.php";
	
	$sql = "DELETE FROM produto WHERE id = $idProduto";

	$retorno = mysqli_query($conexaobanco, $sql);

	if($retorno)
	{
		echo "Produto exluído com sucesso. <a href=\"lista_produtos.php\">Vizualizar produtos</a>";
	}
	else
	{
		echo "Não foi possível exluir produto.";
	}

	mysqli_close($conexaobanco);


}

  ?>