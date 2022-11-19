<?php

if(isset($_POST['email'])){
    include("conexao.php");
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql_code = "SELECT  * FROM pessoa WHERE='$email'  LIMIT 1";
    $sql_exec = mysqli_query($sql_code) or die ($mysqli_conect_error);

    $usuario = $sql_exec->fetch_assoc();
    if(password_verify($password, $usuario['senha'])){
        echo "Usuario Logado";
    }else{
        echo "Falha ao logar, usuario ou senha incorreto";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="email" placeholder="email">
        <input type="password" name="senha" placeholder="senha">
        <input type="submit" value="ENVIAR">
</form>
</body>
</html>