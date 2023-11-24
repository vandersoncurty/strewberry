<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    //verifica os dados na DB
    include("conn.php");
    $sql = "SELECT * FROM Usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row["senha"])) {
            session_start();
            $_SESSION['email'] = $email;
            header("Location: ../includes/inicio.php");
            $conn->close();
            exit();
        }
    }
    header("Location: ../includes/login.php?error=1");
    $conn->close();
    exit();
}
//Existe um bug na verificação de senha correta
?>