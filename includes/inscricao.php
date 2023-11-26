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
    <form method="POST" action="../db/add_inscricao.php" enctype="multipart/form-data" name="registration">
        <label for="name">Nome completo:</label>
        <input type="text" name="name" required>

        <label for="artistic_name">Nome artístico:</label>
        <input type="text" name="artistic_name">

        <label for="instagram">Instagram:</label>
        <input type="text" name="instagram">

        <label for="character_name">Nome do personagem:</label>
        <input type="text" name="character_name" required>

        <label for="character_source">Fonte do personagem:</label>
        <input type="text" name="character_source" required>

        <label for="image">Imagem de referência:</label>
        <input type="file" name="image" required>

        <label for="audio">Áudio da apresentação:</label>
        <input type="file" name="audio" required>

        

        <input type="submit" value="Confirmar inscrição"
    </form>
</body>
</html>