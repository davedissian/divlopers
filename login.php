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

    <div class="container my-5">
    <h2>Login</h2>
    <img class="foto" src="img/user.png" alt="Foto_usuario">
    
        <div class="row">
            <form method="POST" action="./backend/logar.php">
            
            <?php
            if(isset($_SESSION['naologado'])):
            ?>
                <div class="alert alert-danger" role="alert">
                    Erro: Usuário ou senha inválidos!
                </div>
            <?php
                unset($_SESSION['naologado']);
            endif;
            ?>
    
            <div class="col-sm-6 col-md-4 col-lg-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha" id="senha" maxlength="8" required>
            </div>
            <button type="submit" class="btn btn-primary my-3">Entrar</button>
            </form>
        </div>
    </div>
    <?php
    require_once 'footer.html';
    ?>
</body>
</html>