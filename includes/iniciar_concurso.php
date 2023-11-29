<?php
include("../utils/functions.php");
include("../db/conn.php");
$concurso_id = $_GET['concurso_id'];
$concurso = getConcurso($concurso_id, $conn);
$participantes = getParticipantes($concurso_id, $conn);
echo "<h1>" . $concurso['nome'] . "</h1>";

echo '<div>';
    echo "<h3>Participantes em ordem de entrada:</h3>";
    echo "<ul>";
    foreach ($participantes as $participante) {
        echo '<li><a href="javascript:void(0);" onclick="loadPage(\'tela_avaliacao.php?concurso_id=' . $concurso_id . '&' . $participante['participante_id'] . '\')">';
        echo $participante['nome_artistico'] . " - " . $participante['nome_personagem'] . "(" . $participante['fonte_personagem'];
        echo "</li></a>";
    }
    echo "</ul>";
?>