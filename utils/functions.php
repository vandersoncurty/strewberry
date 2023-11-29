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

function getConcursosInicio($userId, $conn) {
    $sql = "SELECT * FROM Concursos WHERE usuario_id = $userId";
    $result = $conn->query($sql);
    return $result;
}

function getParticipantes($id_concurso, $conn) {
    $participantes = array();

    $sql = "SELECT * FROM participantes WHERE concurso_id = $id_concurso";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $participantes[] = $row;
        }
    }
    return $participantes;
}