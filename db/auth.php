<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    include("conn.php");
    $stmt = $conn->prepare("SELECT * FROM Usuarios WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verificar a senha
        if (password_verify($password, $row["senha"])) {
            session_start();
            $_SESSION['email'] = $email;
            header("Location: ../includes/inicio.php");
            $stmt->close();
            $conn->close();
            exit();
        }
    }
    
    header("Location: ../includes/login.php?error=1");
    $stmt->close();
    $conn->close();
    exit();
}
?>