<?php 
   include("cabecalho.php");
   include("conexao.php");
   include("produto-banco.php");
 ?>

				<?php					
					//$conexao = mysqli_connect("localhost","root","","loja");
				
					$nomeProduto = $_POST["nome"];
					$precoProduto = $_POST["preco"];
					$descricaoProduto = $_POST["descricao"];

          $res = cadastraProduto($nomeProduto,$precoProduto,$descricaoProduto,$conexao);

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
