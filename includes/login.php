<div>
    <h1>Bem vindo!</h1>
    <form name="login" method="POST" action="../db/auth.php">
        <label for="email">E-mail:</label>
        <input type="email" name="email" required><br/>
        <label for="password">Senha:</label>
        <input type="password" name="password" required><br/>
        <input type="submit" value="Entrar">
    </form>
    <p>Não tem conta? <a href="javascript:void(0);" onclick="loadPage('includes/cadastro.php')">Cadastre-se</a> e comece a criar seus concursos!</p>
    
    <?php
$error_message = isset($_GET['error']) ? $_GET['error'] : '';
if ($error_message == '1') {
    echo '<p class="error-message">Usuário ou senha incorretos.</p>';
} elseif ($error_message == '3') {
    echo '<p class="error-message">E-mail já cadastrado!</p>';
}
?>
</div>