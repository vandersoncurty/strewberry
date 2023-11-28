<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    //Verifica se a senha e a confirmação são iguais e cria um hash
    if ($password == $confirm_password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        include("conn.php");

        // Verifica se o e-mail já está registrado
        $check_email_query = "SELECT * FROM Usuarios WHERE email = '$email'";
        $check_email_result = $conn->query($check_email_query);

        if ($check_email_result->num_rows > 0) {
            // E-mail já existe
            header("Location: ../includes/login.php?error=3");
            $conn->close();
            exit();
        }

        $sql = "INSERT INTO Usuarios (nome, email, senha) VALUES ('$name', '$email', '$hashed_password')";
        
        if ($conn->query($sql) === TRUE) {
            header("Location: ../index.php?sucess=1");
            $conn->close();
            exit();
        } else {
            header("Location: ../includes/cadastro.php?error=2");
            $conn->close();
            exit();
        }
        
    } else {
        header("Location: ../includes/cadastro.php?error=1");
        $conn->close();
        exit();
    }
}
?>