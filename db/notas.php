<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $concurso_id = $_GET['$concurso_id'];
    $participante_id = $_GET['$participante_id'];
    $nota = $_POST["nota"];
    $observacao = $_POST["ibservacao"];

    
}

/*<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $concurso_id = $_GET['concurso_id'];
    $participante_id = $_GET['participante_id'];
    $nota = $_POST["nota"];
    $observacao = $_POST["observacao"];

    // Validar e processar os dados recebidos conforme necessário

    // Inserir os dados na tabela de notas (substitua 'sua_tabela_notas' pelo nome real da tabela)
    include("../db/conn.php");

    $stmt = $conn->prepare("INSERT INTO sua_tabela_notas (concurso_id, participante_id, nota, observacao) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiis", $concurso_id, $participante_id, $nota, $observacao);

    if ($stmt->execute()) {
        // Redirecionar ou realizar outras ações após o sucesso
        header("Location: sua_pagina_de_redirecionamento.php");
        exit();
    } else {
        // Tratar falha na inserção
        echo "Erro ao inserir notas: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    // Se o script não foi acessado por meio de um método POST, redirecionar ou realizar outras ações conforme necessário
    header("Location: sua_pagina_de_redirecionamento.php");
    exit();
}
?>
*/

?>
