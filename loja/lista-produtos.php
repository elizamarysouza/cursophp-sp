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

	<?php if(array_key_exists('msg',$_GET)){ ?>

    <p><?= $_GET['msg']?></p>
 
 <?php } ?>

		<table class="table table-striped table-bordereo">
		  <tr>
				<td><strong>ID</strong></td>
				<td><strong>Nome</strong></td>
				<td><strong>Preço</strong></td>
				<td><strong>Descrição</strong></td>
				<td><strong>Categoria</strong></td>
        <td><strong>Usado?</strong></td>
				<td><strong>Ações</strong></td>
		  </tr>

<?php

   foreach ($resultado as $produtos){
?>
    <tr>
			<td><?php echo $produtos["id"] ?></td>
			<td><?php echo $produtos["nome"] ?></td>
			<td>R$ <?php echo $produtos["preco"] ?></td>
			<td><?= substr($produtos["descricao"],0,30) ?></td>
			<td><?php echo $produtos["nome_categoria"] ?></td>	
			<td><?php if($produtos["usado"]){ 
               echo "SIM";
						}else {
               echo "NÃO";
						}
					?>
			</td>
		  <td> 
         <form action="excluir-produto.php" method="post"> 
		        <input type="hidden" name="id" value="<?= $produtos['id'] ?>"/>
		        <input type="submit" value="Excluir" class="btn btn-danger"/>
						<a href="formulario-altera-produto.php?id=<?= $produtos['id']?>" class="btn btn-info">Alterar</a>
				 </form>
       </td>
		</tr>

<?php
   }
?>
	</table>
</div>

<?php include("rodape.php"); ?>
