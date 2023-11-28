<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $instagram = $_POST["instagram"];
    $description = $_POST["description"];
    $rules = $_POST["rules"];
    //$event_date = $_POST["event_date"];
    $final_date = $_POST["final_date"];
    //$max_competitors = $_POST["max_competitors"];
    $user_id = $_SESSION['user_id'];

    // Inserindo dados em Concursos
    include "conn.php";
    $stmt = $conn->prepare("INSERT INTO Concursos (usuario_id, nome, instagram, descricao, regulamento, data_encerramento) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssss', $user_id, $name, $instagram, $description, $rules, $final_date);
    $stmt->execute();

    // Verifica se inseriu corretamente
    if ($stmt->affected_rows > 0) {
        // Pega o ID do concurso
        $concurso_id = $stmt->insert_id;
        $link_concurso = "localhost/strewberry/inscricao.php?id=" . $concurso_id;

        // membros da staff
        $stmt = $conn->prepare("INSERT INTO membrosstaff (concurso_id, email, funcao) VALUES (?, ?, ?)");
        $emails = is_array($_POST["emails"]) ? $_POST["emails"] : [];
        $permissions = is_array($_POST["permissions"]) ? $_POST["permissions"] : [];

        for ($i = 0; $i < count($emails); $i++) {
            $email = $emails[$i];
            $permission = isset($permissions[$i]) ? $permissions[$i] : '';

            $stmt->bind_param('iss', $concurso_id, $email, $permission);
            $stmt->execute();
        }
        $stmt->close();

        $conn->close();
        header("Location: ../includes/inicio.php");
        exit();
    } else {
        echo "Erro ao inserir dados do concurso.";
    }
}

?>