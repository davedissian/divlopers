<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divlopers></title>
</head>
<body>
    <?php
    require_once './backend/connection.php';
    require_once 'menu.html';
	?>

    <?php
        $programador = "SELECT * FROM usuario";
        $executa = mysqli_query($connect, $programador);
        $dados = mysqli_fetch_array($executa)
    ?>

    <div class="container mt-4 mb-5">
        <h2><?php echo $dados['nome'];?></h2>

        <label for="email" class="col-form-label">E-mail</label>
        <p id="email" name="email"><?php echo $dados['email'];?></p>  

        <label for="telefone" class="col-form-label">Telefone</label>
        <p id="telefone" name="telefone"><?php echo $dados['telefone'];?></p>   

    </div> 

    <?php    
	require_once 'footer.html';
	?>
</body>
</html>