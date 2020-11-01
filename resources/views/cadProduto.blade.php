<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport">
	<title>Cadastro de Produto</title>

	<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

<style type="text/css">
	.form{
		margin-top: 20px;
		border-radius: 5px;
	}
</style>

</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6 pt-5 mx-auto">
				<h2>Cadastro de Produtos</h2>
				@if(!empty($mensagem))
            		<div class="alert alert-success">Produto inserido com sucesso!</div>
       			@endif
				<div class="form">
					<form class="form" method="post" action="inserir">
						@csrf
						<div class="form-group">
							<label for="nome">Nome:</label>
							<input type="text" class="form-control" name="nome" id="nome">
						</div>
						<div class="form-group">
							<label for="categoria">Categoria:</label>
							<input type="text" class="form-control" name="categoria" id="categoria">
						</div>
						<div class="form-group">
							<label for="preco">Preço:</label>
							<input type="text" class="form-control" name="preco" id="preco">
						</div>
						<button class="btn btn-primary" type="submit" value="inserir">
							Cadastrar
						</button>
					</form>
				</div>
			</div>
					
		</div>
	</div>

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>