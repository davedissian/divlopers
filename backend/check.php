<?php
/* session_start(); */
if(!$_SESSION['email']){
    echo "<script>
            alert('Por favor faça o login!');
            location.href='./login.php'
        </script>";
    exit();
}