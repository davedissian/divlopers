<?php
session_start();
require_once './backend/check.php';
require_once './backend/connection.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/main.css">
    <title>DIVLOPERS></title>
</head>
<body>
    <?php
    require_once 'menu.html';
    ?>

    <div class="container mt-4 mb-5">
        <h2>Editar Perfil</h2>
        <img class="foto" src="img/user.png" alt="Foto_usuario">
        <input type="file" id="foto_user" name="foto_user" accept="img/user.png">
        <form class="container box" method="POST" action="./backend/update.php">
            <input type="hidden" value="<?php echo $_SESSION['id_usuario'];?>" /> 
            
            <label for="nome" class="col-form-label">Nome</label>
            <input class="list-group-item" id="nome" name="nome" value="<?php echo $_SESSION['nome'];?> " /> 

            <label for="email" class="col-form-label">E-mail</label>
            <input class="list-group-item" id="email" name="email" value="<?php echo $_SESSION['email'];?> "/> 

            <label for="cpf" class="col-form-label">CPF</label>
            <input class="list-group-item" id="cpf" name="cpf" value="<?php echo $_SESSION['cpf'];?> "/> 

            <label for="telefone" class="col-form-label">Telefone</label>
            <input class="list-group-item" id="telefone" name="telefone" value="<?php echo $_SESSION['telefone'];?>"/>

            <label for="sexo" class="col-form-label">Sexo</label>
			<select class="list-group-item" name="sexo" >
                <option selected><?php echo $_SESSION['sexo'];?></option>
				<option value="F">Feminino</option>
				<option value="M">Masculino</option>
				<option value="I">Indefinido</option>
			</select>
            <!--
            <label for="senha" class="col-form-label">Senha</label>
            <input type="password" class="list-group-item" id="senha" name="senha" value="<?php echo $_SESSION['senha'];?>"/>
            -->
            <br><button class="btn btn-success p-1 my-1 border-none">Alterar</button>
            <a href="./backend/delete.php" class="btn btn-danger p-1 my-1 border-none">Deletar</a>
            <a href="./backend/logout.php" class="btn btn-primary p-1 my-1 border-none">Sair</a>
        </form>
    </div> 
   
    <?php
    require_once 'footer.html';
    ?>
</body>
</html>