<?php include("cabecalho.php"); ?>

				<?php
					$nomeProduto = $_GET["nome"];
					$precoProduto = $_GET["preco"];
				?>
				Produto <?= $nomeProduto ?>,R$ <?= $precoProduto ?> 
        adicionado com sucesso!

<?php include("rodape.php"); ?>
