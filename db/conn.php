<?php
$servername = "127.0.0.1";
$username = "teste";
$password = "12345678";
$database = "strewberry";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Erro na conexão ao banco de dados". $conn->connect_error);
}
?>