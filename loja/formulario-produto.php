<?php 

include("cabecalho.php");
include("conexao.php"); 
include("categoria-banco.php");
	
	$categorias = listaCategorias($conexao);

?>
      
<div class="panel panel-default">
		<div class="panel-body">
		   <h1>Formulário de Cadastro</h1>
		</div>
		
     <form class="panel-footer" action="adiciona-produto.php" method="post">
					<label>Nome:</label>
					<input class="form-control" type="text" name="nome">
					
				  <label>Preço:</label>
					<input class="form-control" type="text" name="preco">
					 
					<label>Descrição:</label>							
					<input class="form-control" type="text" name="descricao">	
				 
					<label>Usado:
					 <input class="form" type="checkbox" name="usado" value="true">
					</label></br>

					<label>Categorias:</label>
							<select class="form-control" name="categoria">
									<?php foreach($categorias as $c){ ?>
										<option value="<?= $c['id']?>"><?= $c['nome']?> </option>
				          <?php } ?>
							</select>
					 

							<input class="btn btn-primary" type="submit" value="Cadastrar">
		  </form>
		
</div>

       </div>
     </div>

<?php include("rodape.php"); ?>
