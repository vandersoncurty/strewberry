<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/main.css'>
    <script src='../js/main.js'></script>
</head>
<body>

    <?php
    include('../utils/functions.php');
    include('../db/conn.php');
    
    $concursoId = $_GET['id'];
    $concurso = getConcurso($concursoId, $conn);
    ?>

    <form class="form_style" method="POST" action="../db/add_inscricao.php" enctype="multipart/form-data" name="registration">

        <div>
            <h1><?php echo $concurso['nome']; ?></h1>
            <p><?php echo $concurso['descricao']; ?></p>
            <p>Saiba mais no instagram: <?php echo $concurso['instagram']; ?></p>
            <h2>Regulamento</h2>
            <p><?php echo $concurso['regulamento']; ?></p>
        </div>
        <div id="inscricao">
            <input type="hidden" name="concurso_id" value="<?php echo $concursoId; ?>">
            <label for="name">Nome completo:</label><br>
            <input type="text" name="name" required><br><br>

            <label for="artistic_name">Nome artístico:</label><br>
            <input type="text" name="artistic_name"><br><br>

            <label for="instagram">Instagram:</label><br>
            <input type="text" name="instagram"><br><br>

            <label for="character_name">Nome do personagem:</label><br>
            <input type="text" name="character_name" required><br><br>

            <label for="character_source">Fonte do personagem:</label><br>
            <input type="text" name="character_source" required><br><br>

            <table>
                <tr><td>
                    <label for="image">Imagem de referência:</label>
                    <input type="file" name="image" required>
                    </td>
                    <td>
                    <label for="audio">Áudio da apresentação:</label>
                    <input type="file" name="audio" required>
                    </td>
                </tr>
            </table>

            <input type="submit" value="Confirmar inscrição">
        </div>
    </form>
</body>
</html>