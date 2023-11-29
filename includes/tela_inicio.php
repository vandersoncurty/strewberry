<?php
session_start();
include'../db/conn.php';
include '../utils/functions.php';

$userId = $_SESSION['user_id'];
$result = getConcursosInicio($userId, $conn);

while ($row = $result->fetch_assoc()) {
    $concurso_id = $row["concurso_id"];
    echo '<div>';
    echo '<h3><a href="javascript:void(0);" onclick="loadPage(\'tela_concurso.php?concurso_id=' . $concurso_id . '\')">'. $row['nome'] . '</a></h3>';
    echo '</div>';
}
?>