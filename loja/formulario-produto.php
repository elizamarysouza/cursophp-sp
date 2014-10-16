<?php include("cabecalho.php"); ?>
      
<div class="panel panel-default">
		<div class="panel-body">
		   <h1>Formulário de Cadastro</h1>
		</div>
		
     <form class="panel-footer" action="adiciona-produto.php" method="post">
					<label>
							Nome:
							<input class="form-control" type="text" name="nome">
					</label>
				  <label>
							Preço:
							<input class="form-control" type="text" name="preco">
					 </label>
					 <label>
							Descrição:
							<input class="form-control" type="text" name="descricao">
					 </label>
							<input class="btn btn-primary" type="submit" value="Cadastrar">
		  </form>
		
</div>

       </div>
     </div>

<?php include("rodape.php"); ?>
