<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIVLOPERS></title>
</head>
<body>
	<?php
		require_once './backend/connection.php';
		require_once 'menu.html';
	?>
	<div class="container my-4">
		<h3>Programadores</h3>

		<h4>Por área de atuação</h4>
			<p>Em obras...</p>
		<h4>Em ordem alfabetica</h4>
				<?php
					
					$nomes = "SELECT * FROM usuario ORDER BY nome ASC";
					$executa = mysqli_query($connect, $nomes);
					while($dados = mysqli_fetch_array($executa)){
				?>
					<input type="hidden" name="id_usuario" value="<?php echo $dados['id_usuario'] ?>">
					<a href="ficha.php?id='<?php echo $dados['id_usuario'] ?>'" name="nome"><?php echo $dados['nome'] ?></a><br>
						
				<?php
				}
				?>
	</div>
	<?php
	require_once 'footer.html';
	?>
</body>
</html>



