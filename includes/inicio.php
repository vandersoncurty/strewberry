<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/main.css'>
    <script src='../js/main.js'></script>
    <script src="../js/criar_concurso.js"></script>
</head>
<body>
<?php
include("header.php");
?> 
<div id="content">
<?php
        if (isset($_GET['page'])) {
            include($_GET['page'] . '.php');
        } else {
            include('tela_inicio.php');
        }
        ?>
</div>
</body>
</html>