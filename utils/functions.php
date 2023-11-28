<?php
function getConcurso($concursoId, $conn) {
    $concurso = [];

    $sql = "SELECT * FROM Concursos WHERE concurso_id = $concursoId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $concurso = $result->fetch_assoc();
    }

    return $concurso;
}
?>
