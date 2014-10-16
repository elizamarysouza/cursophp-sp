<?php

function cadastraProduto($nome,$preco,$descricao,$conexao){
	$query="Insert into produtos (nome,preco,descricao) values ('{$nome}',{$preco},'{$descricao}')";              
return mysqli_query($conexao,$query);
}

function listaProdutos($conexao){
  $sql= "select * from produtos";
  $resultado = mysqli_query($conexao,$sql);
  $produtos = array();
  while ($p = mysqli_fetch_assoc($resultado)){
	  array_push($produtos, $p);
  }
 return $produtos;
} 

function excluirProduto($conexao,$id){
	$sql = "delete from produtos where id={$id}";	
return mysqli_query($conexao,$sql);
}
