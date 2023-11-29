<div>
    <?php
    include("../utils/functions.php");
    include("../db/conn.php");
    $concurso_id = $_GET['concurso_id'];
    $concurso = getConcurso($concurso_id, $conn);
    $participantes = getParticipantes($concurso_id, $conn);
    $link_concurso = "localhost/strewberry/concursos/inscricao.php?id=" . $concurso_id;

    echo "<h1>" . $concurso['nome'] . "</h1>";
    echo "<p>" . $concurso['descricao'] . "</p>";

    echo '<label for="link"> Compartilhe o link de inscrição:</label>';
    echo '<input type="text" value="'. $link_concurso .'" readonly>';

    echo '<div>';
        echo "<h3>Participantes:</h3>";
        echo "<ul>";
        foreach ($participantes as $participante) {
            echo "<li>";
            echo "Nome: " . $participante['nome'] . " - ";
            echo "Personagem: " . $participante['nome_personagem'];
            echo "</li>";
        }
        echo "</ul>";
    echo '</div>';
    echo '<button onclick="loadPage(\'iniciar_concurso.php?concurso_id=' . $concurso_id . '\')">Iniciar concurso</button>';
    ?>
</div>