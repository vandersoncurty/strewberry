<!DOCTYPE html>
<html>
    <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Strewberry</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/main.css'>
    <script src='js/main.js'></script>
    </head>
    <body>
        <div id="content">
        <?php
		//conteudo das páginas XmlHTTPRequest
        if (isset($_GET['page'])) {
            include($_GET['page'] . '.php');
        } else {
            include('includes/login.php');
        }
        ?>
        </div>
    </body>

</html>