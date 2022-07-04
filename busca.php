<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Teste Para Empresa - Busca </title>
		<meta charset="utf-8">
		<meta name="Teste para empresa">
		<meta name="author" content="Jeferson Moisés Padilha">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<span style="color:red; margin-left:25%; font-size: 30px;" font-style="italic">Tela de Busca</span>
		<hr>
		<div style="margin:50px 0px 50px 0px" class="bottons">
			<form action="busca.php" method="POST">
					<input type="text" name="pesquisar" placeholder="Pesquisar">
					<input type="submit" value="Pesquisar">
			</form>
		</div>
		<hr>
	</body>
</html>
<?php
		require_once 'conexao.php';

		$pesquisar = $_POST["pesquisar"];

			$sql = " SELECT * FROM cursos WHERE nome LIKE '%$pesquisar%'";
				
				$resultado = mysqli_query($conn, $sql);

					echo $resultado;


					
					
?>

