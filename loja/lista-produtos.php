<?php include("cabecalho.php"); 
      include("conexao.php");
			include("produto-banco.php");
 ?>
<?php
   //$conexao = mysqli_connect("localhost","root","","loja"); 
   $resultado = listaProdutos($conexao);
 ?>  
  <div class="panel panel-default">
		<div class="panel-heading">
		   <h1>Lista de Produtos</h1>
		</div>

		<table class="table table-striped table-bordereo">
		  <tr>
				<td><strong>ID</strong></td>
				<td><strong>Nome</strong></td>
				<td><strong>Preço</strong></td>
		  </tr>

<?php

   foreach ($resultado as $produtos){
?>
    <tr>
			<td><?php echo $produtos["id"] ?></td>
			<td><?php echo $produtos["nome"] ?></td>
			<td>R$ <?php echo $produtos["preco"] ?></td>
		</tr>

<?php
   }
?>
	</table>
</div>

<?php include("rodape.php"); ?>
