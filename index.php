<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/main.css" type="text/css" rel="stylesheet"/>

    <title> &lt;Divlopers&lg; </title>
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

			<h1>
				Bem-vindo ao Divlopers, uma plataforma feita<br/>especialmente para os DEVS
			</h1>
		</div>

	<?php
		require_once './backend/connection.php';
	?>
	<div class="container">
		<h3>Programadores</h3>
		<?php
					$nomes = "SELECT id_usuario, nome FROM usuario ORDER BY nome ASC";
					$executa = mysqli_query($connect, $nomes);
					while($dados = mysqli_fetch_array($executa)){
				?>
					<input type="hidden" name="id_usuario" value="<?php echo $dados['id_usuario'] ?>">
					<a href="ficha.php" name="nome"><?php echo $dados['nome'] ?></a><br>
						
				<?php
				}
				?>

		<h4>Por área de atuação</h4>
			<p>Em obras...</p>
	</div>

    </nav>
  </body>
</html>
	



