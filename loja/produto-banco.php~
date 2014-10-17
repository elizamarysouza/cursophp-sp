<?php

function cadastraProduto($nome,$preco,$descricao,$categoria,$usado,$conexao){
	$query="Insert into produtos (nome,preco,descricao,categoria_id,usado) values ('{$nome}',{$preco},'{$descricao}','{$categoria}',{$usado})";              
return mysqli_query($conexao,$query);
}

function listaProdutos($conexao){
  $sql= "select p.*, c.nome as nome_categoria from produtos as p inner join categorias as c on p.categoria_id = c.id";
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

function buscaProduto($conexao,$id){
  $query = "select * from produtos where id={$id}";
  $res = mysqli_query($conexao,$query);
  return mysqli_fetch_assoc($res);
}

function alteraProduto($id,$nome,$preco,$descricao,$categoria,$usado,$conexao){
  $query="Update produtos set nome='{$nome}',preco={$preco},descricao='{$descricao}',categoria_id={$categoria},usado={$usado} where id={$id} ";  
 return mysqli_query($conexao,$query); 
}
