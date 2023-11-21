    <div>
        <h1>Bem vindo!</h1>
        <form name="login" method="POST" action="db/auth.php">
            <label for="email">E-mail:</label>
            <input type="email" name="email" required><br/>
            <label for="password">Senha:</label>
            <input type="password" name="password" required><br/>
            <input type="submit" value="Entrar">
        </form>
        <p>Não tem conta? <a href="javascript:void(0);" onclick="loadPage('includes/cadastro.php')">Cadastre-se</a> e comece a criar seus concursos!</p>
    </div>
    <?php
//exibir mensagem de email ou senha incorretos
        ?>