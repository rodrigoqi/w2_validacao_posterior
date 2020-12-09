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
		<form class="formulario" method="get" action="index.php">
			<br>
			<div class="row">
				<div class="col-md-6">
					<label for="nome">Nome</label>
					<input type="text" name="nome" id="nome" value="">
				</div>
				<div class="col-md-2">
					<label for="usuario">Nome de usuário</label>
					<input type="text" name="usuario" id="usuario" value="">
				</div>
				<div class="col-md-2">
					<label for="senha">Senha</label>
					<input type="text" name="senha" id="senha" value="">
				</div>
				<div class="col-md-2">
					Sexo:<br>
					<input type="radio" name="sexo" id="sexo1" value="Feminino"> Feminino<br>
					<input type="radio" name="sexo" id="sexo2" value="Masculino"> Masculino
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2">
					<label for="nascimento">Nascimento</label>
					<input type="text" name="nascimento" id="nascimento" value="">
				</div>
				<div class="col-md-2">
					<label for="telefone">Fone</label>
					<input type="text" name="telefone" id="telefone" value="">
				</div>
				<div class="col-md-2">
					<label for="cpf">CPF</label>
					<input type="text" name="cpf" id="cpf" value="">
				</div>
				<div class="col-md-6">
					<label for="email">E-mail</label>
					<input type="text" name="email" id="email" value="">
				</div>

			</div>
			<br>
			<div class="row">
				<div class="col-md-2">
					<label for="salario">Salário</label>
					<input type="text" name="salario" id="salario" value="">
				</div>
				<div class="col-md-4">
					<label for="cidade">Cidade</label>
					<input type="text" name="cidade" id="cidade" value="">
				</div>
				<div class="col-md-2">
					<label for="cep">CEP</label>
					<input type="text" name="cep" id="cep" value="">
				</div>
				<div class="col-md-2">
					<label for="uf">UF</label><br>
					<select name="uf" id="uf">
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

		<?php

		if (isset($_GET["nome"])) {

			$nome = trim($_GET["nome"]);
			$usuario = trim($_GET["usuario"]);
			$senha = trim($_GET["senha"]);
			$sexo = $_GET["sexo"];
			$nascimento = trim($_GET["nascimento"]);
			$telefone =trim($_GET["telefone"]);
			$cpf = trim($_GET["cpf"]);
			$email = trim($_GET["email"]);
			$salario = $_GET["salario"];
			$cidade = trim($_GET["cidade"]);
			$cep = trim($_GET["cep"]);
			$uf = $_GET["uf"];

			echo "<script>";
			echo "$('#nome').val('$nome');";
			echo "$('#usuario').val('$usuario');";
			echo "$('#senha').val('$senha');";
			echo "$('#nascimento').val('$nascimento');";
			echo "$('#telefone').val('$telefone');";
			echo "$('#cpf').val('$cpf');";
			echo "$('#email').val('$email');";
			echo "$('#salario').val('$salario');";
			echo "$('#cidade').val('$cidade');";
			echo "$('#cep').val('$cep');";
			echo "$('#uf').val('$uf');";

			if ($sexo == "Feminino") {
				echo "$('#sexo1').attr('checked', 'checked');";
			} else {
				echo "$('#sexo2').attr('checked', 'checked');";
			}

			echo "</script>";

			/*VALIDAÇÃO COM PHP*/
			$validado = true;
			$erros = "";

			/*VALIDAÇÃO DO NOME*/
			/*não vazio (obrigatório)*/
			if($nome==""){
				$validado = false;
				$erros = $erros . "Digite o seu nome<br>";
			}
			/*maior do que 5 caracteres*/
			if(strlen($nome)<=5){
				$validado = false;
				$erros = $erros . "O nome completo deve possuir mais do que 5 caracteres<br>";
			}
			/*aceitar somente letras e espaço em branco*/
			if(!preg_match('[a-zA-Z ]+', $nome)){
				$validado = false;
				$erros = $erros . "Use somente letras e espaço em branco no nome<br>";
			}

			/*VALIDAÇÃO USUÁRIO*/
			if(!preg_match('[a-zA-Z]{5,}', $usuario)){
				$validado = false;
				$erros = $erros . "Use somente letras no usuário (mínimo de 5 caracteres)<br>";
			}

			/*VALIDAÇÃO SENHA*/
			if(!preg_match('\w{8,}', $senha)){
				$validado = false;
				$erros = $erros . "Use somente letras e números na senha (mínimo de 8 caracteres)<br>";
			}

			/*VALIDAÇÃO TELEFONE*/
			if(!preg_match('\([0-9]{2}\)[0-9]{4,5}\-[0-9]{4}', $telefone)){
				$validado = false;
				$erros = $erros . "Digite o telefone no formato (xx)xxxx-xxxx ou (xx)xxxxx-xxxx<br>";
			}

			/*VALIDAÇÃO CPF*/
			/*validação do formato*/
			if(!preg_match('[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}', $cpf)){
				$validado = false;
				$erros = $erros . "Digite o CPF no formato xxx.xxx.xxx-xx<br>";
			}

			/*VALIDAÇÃO EMAIL*/
			if(!preg_match('[a-z0-9._-]{3,}\@[a-z0-9]{2,}\.[a-z0-9]{2,}\.?([a-z0-9]{2,})?', $email)){
				$validado = false;
				$erros = $erros . "Digite um e-mail válido<br>";
			}

			/*VALIDAÇÃO SALÁRIO*/
			if(!preg_match('([0-9]{1,3}\.?)?[0-9]{1,3}(\,[0-9]{2})?', $salario)){
				$validado = false;
				$erros = $erros . "Digite um salário válido<br>";
			}
			/*VALIDAÇÃO CIDADE*/
			if(!preg_match('[a-zA-Z ]{3,}', $cidade)){
				$validado = false;
				$erros = $erros . "Use somente letras na cidade (mínimo de 3 caracteres)<br>";
			}
			
			/*VALIDAÇÃO CEP*/
			if(!preg_match('[0-9]{5}[-]?[0-9]{3}', $cep)){
				$validado = false;
				$erros = $erros . "Use somente letras na cidade (mínimo de 3 caracteres)<br>";
			}



		}

		?>


	</div>
</body>

</html>