<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport">
	<title>Cadastro de Produto</title>

	<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

<style type="text/css">
	.tabela{
		margin-top: 20px;
		border-radius: 5px;
	}
</style>

</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-10 ">
			<div class="tabela">
				<h2 class="head pb-2">Lista de Produtos</h2>
				
					@if(!empty($mensagem))
           				<div class="alert alert-success">Produto inserido com sucesso!</div>
        			@endif

				<table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Nome</th>
				      <th scope="col">Categoria</th>
				      <th scope="col">Preço</th>
				      <th scope="col">Ações</th>
				      <th scope="col">Ações</th>
				    </tr>
				  </thead>

				  @foreach ($produtos as $p)

				  <tbody>
				    <tr>
				      <td>{{ $p->id }}</td>
				      <td class="text-left">{{ $p->nome }}</td>
				      <td class="text-left">{{ $p->categoria }}</td>
				      <td>{{ $p->valor }}</td>

				      <td><a href="editar/{{$p->id}}"><button class="btn btn-success">Alterar</button></a></td>

				      <td><a href="excluir/{{$p->id}}"><button class="btn btn-danger">Excluir</button></a></td>
				      
				    </tr>
				  </tbody>
				  @endforeach
				</table>
			
			</div>	
		</div>
	</div>
</div>



<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>