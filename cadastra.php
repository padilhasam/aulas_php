<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Teste Para Empresa - Cadastro </title>
		<meta charset="utf-8">
		<meta name="Teste para empresa">
		<meta name="author" content="Jeferson Moisés Padilha">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<span style="color:red; margin-left:25%; font-size: 30px;" font-style="italic">Tela de Cadastro</span>
		<hr>
		<div style="margin:50px 0px 50px 0px" class="bottons">
			<form action="cadastra.php" method="POST">
				<div class="row">
  					<div class="col">
    					<input type="text" class="form-control" placeholder="First name" aria-label="First name">
  					</div>
  					<div class="col">
    					<input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
  					</div>
				</div>
				
				Código:<input type="text" name="id">
				Nome: <input type="text" name="nome">
				Endereço: <input type="text" name="endereco">
					<input type="submit" value="Enviar">
			</form>
		</div>
		<hr>
	</body>
</html>
<?php
		require_once 'conexao.php';	

		$id = $_POST["id"];
		$nome = $_POST["nome"];
		$endereco = $_POST["endereco"];

			$sql = "INSERT INTO usuario (nome,endereco) VALUES ('$nome', '$endereco')";

				if(mysqli_query($conn, $sql)){

						echo "Cadastrado no Banco de Dados";

				};


?>