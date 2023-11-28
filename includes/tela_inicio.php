<?php
session_start();
include'../db/conn.php';
include '../utils/functions.php';

$userId = $_SESSION['user_id'];
$result = getConcursosInicio($userId, $conn);

while ($row = $result->fetch_assoc()) {
    echo '<div>';
    echo '<h3>' . $row['nome'] . '</h3>';
    echo '</div>';
}
?>