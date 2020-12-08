<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!--Tags básicas do head-->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validação de Formulários</title>
	<!--Link dos nossos arquivos CSS e JS padrão-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="js/scripts.js"></script>
	<!--Link dos arquivos CSS e JS do Bootstrap-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>

<body>
	<div class="container corpo">
		<br>
		<div class="row text-center">
			<div class="col-md-12">
				<img class="ajustavel" src="img/form.png">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Exemplo de envio de dados e validação de formulário</h1>
			</div>
		</div>

		<form class="formulario" method="get" action="confirmacao.php">
			<br>
			<div class="row">
				<div class="col-md-6">
					<label for="nome">Nome</label>
					<input type="text" name="nome" value="">
				</div>
				<div class="col-md-2">
					<label for="usuario">Nome de usuário</label>
					<input type="text" name="usuario" value="" >
				</div>	
				<div class="col-md-2">
					<label for="senha">Senha</label>
					<input type="text" name="senha" value="">
				</div>
				<div class="col-md-2">
					Sexo:<br>
					<input type="radio" name="sexo" value="Feminino">   Feminino<br>
					<input type="radio" name="sexo" value="Masculino">   Masculino
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2">
					<label for="nascimento">Nascimento</label>
					<input type="text" name="nascimento" value="">
				</div>
				<div class="col-md-2">
					<label for="telefone">Fone</label>
					<input type="text" name="telefone" value="">
				</div>
				<div class="col-md-2">
					<label for="cpf">CPF</label>
					<input type="text" name="cpf" value="">
				</div>
				<div class="col-md-6">
					<label for="email">E-mail</label>
					<input type="text" name="email" value="">
				</div>

			</div>
			<br>
			<div class="row">
			<div class="col-md-2">
					<label for="salario">Salário</label>
					<input type="text" name="salario" value="">
				</div>
				<div class="col-md-4">
					<label for="cidade">Cidade</label>
					<input type="text" name="cidade" value="">
				</div>
				<div class="col-md-2">
					<label for="cep">CEP</label>
					<input type="text" name="cep" value="">
				</div>
				<div class="col-md-2">
					<label for="uf">UF</label><br>
					<select name="uf">
						<option>PR</option>
						<option>RS</option>
						<option>SC</option>
					</select>
				</div>
				

			</div>
			<br>
			<br>
			<div class="row text-center">
				<div class="col-md-12">
					<input type="submit" name="btnEnviar" value="Enviar os dados" id="botao">
				</div>
			</div>
			

		</form>

	</div>
</body>

</html> 