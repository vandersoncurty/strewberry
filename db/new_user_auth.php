<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
}
//Verifica se a senha e a confirmação são iguais
if ($password == $confirm_password) {
    //verifica se o email já não está registrado
    if (/*Código de validação*/ (1+1 == 2)) {
        //código
    } else {
        header("Location: login.php?error=1");
        exit();
    }
} else {
    header("Location: login.php?error=1");
}

?>