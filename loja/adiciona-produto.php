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
          $categoriaProduto = $_POST["categoria"];
					$usado= 'false';

					if(array_key_exists('usado',$_POST)){
 						 print "ENTREI AQUI:".$_POST["usado"];
						$usado= 'true';
             print "AGORA:".$_POST["usado"];            
					}

          $res = cadastraProduto($nomeProduto,$precoProduto,$descricaoProduto,$categoriaProduto,$usado,$conexao);

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
