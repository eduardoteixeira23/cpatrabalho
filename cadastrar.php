<?php
session_start();
//inclui conexão php
$servername = "localhost";
$database = "cadastro";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

//testa conexao
if (!$conn) {
    die("<br> Connection failed: " . mysqli_connect_error());
}
// Check connection

//puxando variaveis do cadastro
$nome = mysqli_real_escape_string($conexao, trim($_POST['name']));
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));

$sql= "select pessoa(*) as total from nome where nome = '$nome'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


if($row == 1){
  $_SESSION['usuario_existe'] = true;
  header('Location: cadatro.php');
  exit;
}


$sqlI = "INSERT INTO pessoa(name, email, senha) VALUES ('$nome','$email', '$senha')";

if ($conn->query($sqlI) === TRUE) {
  
} else {
  echo "<br> Error: " . $sqlI . "<br>" . $conn->error;
}

mysqli_close($conn);
?>