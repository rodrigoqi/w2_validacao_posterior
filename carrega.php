<?php
						//Ler os dados vindos do formulário através da URL
						//Colocar cada um deles dentro de uma variável
						//Exibir com echo esses dados aqui dentro desta DIV
						
						session_start();
						if(isset($_SESSION["nome"])){
							$nome = $_SESSION["nome"];
							$usuario = $_SESSION["usuario"];
							$senha = $_SESSION["senha"];
							$sexo = $_SESSION["sexo"];
							$nascimento = $_SESSION["nascimento"];
							$telefone = $_SESSION["telefone"];
							$cpf = $_SESSION["cpf"];
							$email = $_SESSION["email"];
							$salario = $_SESSION["salario"];
							$cidade = $_SESSION["cidade"];
							$cep = $_SESSION["cep"];
							$uf = $_SESSION["uf"];

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
