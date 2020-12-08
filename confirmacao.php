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
				<img class="ajustavel" src="img/formconfirmacao.png">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Dá-lhe meu galo! Dados validados chê...</h1>
			</div>
		</div>

		<form class="formulario" method="get" action="index.php">
			<br>
			<div class="row text-center">
				<div class="col-md-12">
					<?php
						//Ler os dados vindos do formulário através da URL
						//Colocar cada um deles dentro de uma variável
						//Exibir com echo esses dados aqui dentro desta DIV
						if(isset($_GET["nome"])){
							$nome = $_GET["nome"];
							$usuario = $_GET["usuario"];
							$senha = $_GET["senha"];
							$sexo = $_GET["sexo"];
							$nascimento = $_GET["nascimento"];
							$telefone = $_GET["telefone"];
							$cpf = $_GET["cpf"];
							$email = $_GET["email"];
							$salario = $_GET["salario"];
							$cidade = $_GET["cidade"];
							$cep = $_GET["cep"];
							$uf = $_GET["uf"];

							echo "<br>Nome: $nome";
							echo "<br>Nome de usuário: $usuario";
							echo "<br>Senha: $senha";
							echo "<br>Sexo: $sexo";
							echo "<br>Nascimento: $nascimento";
							echo "<br>Fone: $telefone";
							echo "<br>CPF: $cpf";
							echo "<br>E-mail: $email";
							echo "<br>Salário: $salario";
							echo "<br>Cidade: $cidade";
							echo "<br>CEP: $cep";
							echo "<br>UF: $uf";

						}

					?>
				</div>
			</div>
			<br>
			<div class="row text-center">
				
				<div class="col-md-12">
					<input type="submit" name="btnVoltar" value="Voltar" id="botao">
				</div>
				
			</div>
			

		</form>
			
	</div>
</body>

</html>