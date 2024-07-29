<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
<?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <!-- cadastro formulario -->
    <div class="container_form">
        <h1>Crie seu Cadastro</h1>
        <form class="form" action="processa.php" method="post">
            <div class="form_grupo">
                <label for="nome" class="form_label">Nome Completo</label>
                <input type="text" name="nome" class="form_input" id="nome" placeholder="Nome" required>
            </div>

            <div class="form_grupo">
                <label for="e-mail" class="form_label">Email</label>
                <input type="email" name="email" class="form_input" id="email" placeholder="seuemail@email.com"required>
            </div>

            <div class="form_grupo">
                <label for="datanascimento" class="form_label">Data de Nascimento</label>
                <input type="date" name="datanascimento" class="form_input" id="datanascimento" placeholder="__/__/____"required>
            </div>
            <div class="form_grupo">
                <label for="cpf" class="text">CPF</label>
                <input type="numero" name="cpf" class="form_input" id="cpf" placeholder="___.___.___-__" required>
            </div>
            <div class="form_grupo">
            <label for="sexo">Sexo:</label>
            <select name="sexo" >
                <option>Masculino</option>
                <option>Feminino</option>
                 <option>Näo informar</option>
                </select>
            </div>

            <div class="form_grupo">
                <label for="Telefone" class="text">Telefone</label>
                <input type="numero" name="telefone" class="form_input" id="telefone" placeholder="(__) _____-____" required>
            </div>

            <div class="form_grupo">
                <label for="senha" class="text">Senha</label>
                <input id="senha" class="senha" description="precisa ter entre 6 e 20 caracteres" type="password"minlength="6" maxlength="20" cursor="pointer" name="senha" required="" label="[object Object]">
            </div>
            <div class="submit">
                <input type="hidden" name="acao" value="enviar">
                <button type="submit" name="Submit" class="submit_btn"> Criar Cadastro</button>
            </div>
            <p description="já tem cadastro?" textlink="entrar" link="login.php" class="ad">já tem cadastro?<a href="login.php"class="sc-dAcpuZ fslsOW">entrar</a></p>
        </form>
    </div>

</body>

</html>