<?php
$nome = $_POST["name"];
$senha = $_POST["senha"];
$email = $_POST["email"];

if ($nome != null) {

    $sqlI = "INSERT INTO pessoa(name, email, senha) VALUES ('$nome','$email', '$senha')";
    if ($conn->query($sqlI) === TRUE) {

    } else {
        echo "<br> Error: " . $sqlI . "<br>" . $conn->error;
    }
    mysqli_close($conn);
}

?>