<?php 
   include("cabecalho.php");
   include("conexao.php");
   include("produto-banco.php");
 ?>

				<?php					
					//$conexao = mysqli_connect("localhost","root","","loja");
				
					$nomeProduto = $_GET["nome"];
					$precoProduto = $_GET["preco"];

          $res = cadastraProduto($nomeProduto,$precoProduto,$conexao);

				if($res){

				?>
				<p class="alert-success">
				Produto <?= $nomeProduto ?> com o valor de R$ <?= $precoProduto ?> 
        adicionado com sucesso!</p>

        <?php
          }else{
				    
				?>

          <p class="alert-danger">
				Produto <?= $nomeProduto ?> com o valor de R$ <?= $precoProduto ?> 
        não foi possível adicionar o produto!
				ERRO:<?= mysqli_error($conexao)?></p>

				<?php
          }
				?>

<?php include("rodape.php"); ?>
