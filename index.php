<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/main.css" type="text/css" rel="stylesheet"/>
    <title>DIVLOPERS></title>
</head>
<body>
<div class="bg-color size-box">
			<header>
				<nav>
					<div class="margin-content menu">
						<div id="logo">
							<p> &lt;Divlopers&gt; </p>
						</div>
						<ul>
						<li>
							<a href="usuario.php"> Cadastrar Programador</a>
						</li>

						<li>
							<a href="perfil.php"> Perfil </a>
						</li>

						<li>
							<a id="nav-link" href="login.php"> Login </a>
						</li>
						</ul>
					</div>
				</nav>
			</header>

			<div class="margin-content">
				<div class="heading">
					<h1>
						Bem-vindo ao Divlopers
					</h1>
					<div class="paragraph">
						<p> A plataforma para DEVS </p>
					</div>
				</div>
			</div>
		</div>
	<div class="container my-4">
		<h3>Programadores</h3>

		<h4>Por área de atuação</h4>
			<p>Em obras...</p>
		<h4>Em ordem alfabetica</h4>
				<?php
					require_once './backend/connection.php';
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



