<div>
    <h1>Cadastro</h1>
    <form method="POST" action="includes/new_user_auth.php" name="cadastro">
        <label for="name">Nome:</label>
        <input type="text" name="name">

        <label for="email">E-mail:</label>
        <input type="email" name="email">

        <label for="password">Senha:</label>
        <input type="password" name="password">

        <label for="confirm_password">Confirmar senha:</label>
        <input type="password" name="confirm_password">

        <input type="submit" value="Cadastrar">
    </form>
    <p>Já possui conta? <a href="javascript:void(0);" onclick="loadPage('includes/login.php')">Fazer login</a>.</p>
</div>