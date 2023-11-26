<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $artistic_name = $_POST["artistic_name"];
    $instagram = $_POST["instagram"];
    $character_name = $_POST["character_name"];
    $character_source = $_POST["character_source"];

    // Upload de arquivos
    $image_path = '../files/inscricao_img'; // pasta de imagens
    $audio_path = '../files/inscricao_audio'; // pasta de áudios

    if (isset($_FILES['image']) && isset($_FILES['audio'])) {
        $image_path = '../files/inscricao_img' . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);

        $audio_path = '../files/inscricao_audio' . $_FILES['audio']['name'];
        move_uploaded_file($_FILES['audio']['tmp_name'], $audio_path);
    }

    include("conn.php");

    $sql = "INSERT INTO Participantes (nome_completo, nome_artistico, instagram, nome_personagem, fonte_personagem, imagem_referencia, audio_apresentacao)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssss', $name, $artistic_name, $instagram, $character_name, $character_source, $image_path, $audio_path);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Inscrição realizada com sucesso!";
    } else {
        echo "Erro ao processar a inscrição, por favor tente novamente. Se o problema persistir, entre em contato com a organização do concurso.";
    }

    $stmt->close();
    $conn->close();
    header("Location: ../includes/login.php");
}
?>
