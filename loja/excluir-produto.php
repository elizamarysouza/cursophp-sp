<?php
   include("conexao.php");
   include("produto-banco.php");

	$id = $_POST['id'];
        echo "Numero do ID:".$id;
	$res = excluirProduto($conexao,$id);
	
	if($res){
		header("Location:lista-produtos.php?msg=Item excluído com sucesso");
	}else{
		header("Location:lista-produtos.php?msg=Ocorreu um erro");
	}
	die();
 ?>
