<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
}

//verifica os dados na DB
if (/*Código de validação*/ (1+1 == 2)) {
    header("Location: ../includes/inicio.php");
    exit();
} else {
    header("Location: login.php?error=1");
    exit();
}
    ?>