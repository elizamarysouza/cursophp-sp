<?php

function cadastraProduto($nome,$preco,$conexao){
	$query="Insert into produtos (nome, preco) values ('{$nome}',{$preco})";              
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