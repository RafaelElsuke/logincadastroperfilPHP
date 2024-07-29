<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <!-- login formulario -->
    <div class="container_form">
        <h1>Login do Cliente</h1>
        <form class="form" action="" method="post">
            <div class="form_grupo">
                <label for="e-mail" class="form_label">Email</label>
                <input type="email" name="email" class="form_input" id="email" placeholder="seuemail@email.com"required>
            </div>
            <div class="form_grupo">
                <label for="senha" class="form_label">Senha</label>
                <input type="password" name="senha" class="form_input" id="senha" placeholder="" required>
                <div class="form_grupo">
                    <input type="submit" name="submit"value="logar">
                </div>
                <div class="esqueci_senha">
                    <a href="#">Esqueceu a senha?</a>
                </div>
            </div>
            <p description="Não tem cadastro?" textlink="Cadastre-se" link="cadastro.php" class="ad">Não tem cadastro?
                <a href="cadastro.php" class="ad">Cadastre-se</a></p>
        </form>
    </div>

    <!-- validando login -->
    <?php
    session_start();
    include_once 'conexao.php';
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $dados = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $dados['email'];
            $_SESSION['senha'] = $dados['senha'];
            header('location: perfil.php');
        } else {
            echo "Email ou senha incorretos!";
        }
        mysqli_close($conn);
    }
        ?> 
</body>

</html>