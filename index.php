<!DOCTYPE html>
<html>
    <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Strewberry</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
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
        <div><img alt="img" src="https://www.google.com/url?sa=i&url=http%3A%2F%2Fcbissn.ibict.br%2Findex.php%2Fimagens%2F1-galeria-de-imagens-01%2Fdetail%2F3-imagem-3-titulo-com-ate-45-caracteres&psig=AOvVaw0rJb9ZT-lHQBqL5zh89SyT&ust=1701110088708000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCJDwqYan4oIDFQAAAAAdAAAAABAE"></div>
    </body>

</html>