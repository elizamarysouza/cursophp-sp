<?php include("cabecalho.php"); ?>

				<h1>Formulário de Cadastro</h1>
				<form action="adiciona-produto.php">
					<label>
							Nome:
							<input type="text" name="nome">
					</label>
				  <label>
							Preço:
							<input type="text" name="preco">
					 </label>
							<input type="submit" value="Cadastrar">
				</form>

<?php include("rodape.php"); ?>
