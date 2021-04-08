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
require_once 'menu.html';
?>
<div class="container mt-4 mb-5">
	<form class="container box" action="./backend/cadUsuario.php" method="post">
		<label for="nome" class="col-form-label">Nome</label>
		<input type="text" class="list-group-item" name="nome"/>

		<label for="senha" class="col-form-label">Senha</label>
		<input type="password" class="list-group-item" name="senha" maxlength="8"/>

		<label for="senha2" class="col-form-label">Confirme sua senha</label>
		<input type="password" class="list-group-item" name="senha2" maxlength="8"/>

		<label for="email" class="col-form-label">Email</label>
		<input type="text" class="list-group-item" name="email" placeholder="exemplo@email.com"/>

		<label for="cpf" class="col-form-label">CPF</label>
		<input type="text" class="list-group-item" name="cpf" maxlength="11" placeholder="Apenas numeros"/>

		<label for="telefone" class="col-form-label">Telefone</label>
		<input type="text" class="list-group-item" name="ddd" size="2" maxlength="2" placeholder="DDD"/> <br>
		<input type="text" class="list-group-item" name="telefone" placeholder="Telefone" maxlength="10"/>

		<label for="sexo" class="col-form-label">Sexo</label>
			<select class="list-group-item" name="sexo">
				<option value="F">Feminino</option>
				<option value="M">Masculino</option>
				<option value="I">Indefinido</option>
			</select>

		<button type="submit" class="btn btn-primary my-3">Cadastrar</button>
	</form>
</div>

<?php
require_once 'footer.html';
?>
</body>
</html>

