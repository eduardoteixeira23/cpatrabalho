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
$sql = "SELECT * FROM pessoa";

$pessoas = mysqli_query($conn,$sql);

$dados = mysqli_fetch_array($pessoas);
?>