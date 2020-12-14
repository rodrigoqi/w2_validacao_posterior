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
				$erros = $erros . "Digite o seu nome\\n";
			}
			/*maior do que 5 caracteres*/
			if(strlen($nome)<=5){
				$validado = false;
				$erros = $erros . "O nome completo deve possuir mais do que 5 caracteres\\n";
			}
			/*aceitar somente letras e espaço em branco*/
			if(!preg_match('/^[a-zA-Z]{6,}$/', $nome)){
				$validado = false;
				$erros = $erros . "Use somente letras e espaço em branco no nome\\n";
			}

			/*VALIDAÇÃO USUÁRIO*/
			if(!preg_match('/^[a-zA-Z]{5,}$/', $usuario)){
				$validado = false;
				$erros = $erros . "Use somente letras no usuário (mínimo de 5 caracteres)\\n";
			}

			/*VALIDAÇÃO SENHA*/
			if(!preg_match('/^\w{8,}$/', $senha)){
				$validado = false;
				$erros = $erros . "Use somente letras e números na senha (mínimo de 8 caracteres)\\n";
			}

			/*VALIDAÇÃO TELEFONE*/
			if(!preg_match('/^\([0-9]{2}\)[0-9]{4,5}\-[0-9]{4}$/', $telefone)){
				$validado = false;
				$erros = $erros . "Digite o telefone no formato (xx)xxxx-xxxx ou (xx)xxxxx-xxxx\\n";
			}

			/*VALIDAÇÃO CPF*/
			/*validação do formato*/
			if(!preg_match('/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/', $cpf)){
				$validado = false;
				$erros = $erros . "Digite o CPF no formato xxx.xxx.xxx-xx\\n";
			}

			/*VALIDAÇÃO EMAIL*/
			if(!preg_match('/^[a-z0-9._-]{3,}\@[a-z0-9]{2,}\.[a-z0-9]{2,}\.?([a-z0-9]{2,})?$/', $email)){
				$validado = false;
				$erros = $erros . "Digite um e-mail válido\\n";
			}

			/*VALIDAÇÃO SALÁRIO*/
			if(!preg_match('/^([0-9]{1,3}\.?)?[0-9]{1,3}(\,[0-9]{2})?$/', $salario)){
				$validado = false;
				$erros = $erros . "Digite um salário válido\\n";
			}
			/*VALIDAÇÃO CIDADE*/
			if(!preg_match('/^[a-zA-Z ]{3,}$/', $cidade)){
				$validado = false;
				$erros = $erros . "Use somente letras na cidade (mínimo de 3 caracteres)\\n";
			}
			
			/*VALIDAÇÃO CEP*/
			if(!preg_match('/^[0-9]{5}[-]?[0-9]{3}$/', $cep)){
				$validado = false;
				$erros = $erros . "Digite o CEP no formato xxxxx-xxx\\n";
			}

			if(!$validado){
				echo "<script>alert('$erros');</script>";
			} else {

				session_start();
				$_SESSION["nome"] = $nome;
				$_SESSION["usuario"] = $usuario;
				$_SESSION["senha"] = $senha;
				$_SESSION["sexo"] = $sexo;
				$_SESSION["nascimento"] = $nascimento;
				$_SESSION["telefone"] = $telefone;
				$_SESSION["cpf"] = $cpf;
				$_SESSION["email"] = $email;
				$_SESSION["salario"] = $salario;
				$_SESSION["cidade"] = $cidade;
				$_SESSION["cep"] = $cep;
				$_SESSION["uf"] = $uf;

				header('Location: confirmacao.php');
			}

		}

		?>