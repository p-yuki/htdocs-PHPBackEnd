<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Login</h1>

        <form action="index.php" method="post">
        <div class="dados">
                <label for="">Nome de Usuário: </label>
                <input type="text" name="user" id="user" placeholder="Informe o nome de usuário ...">
            </div>

            <div class="dados">
                <label for="">Senha: </label>
                <input type="password" name="senha" id="senha" placeholder="Insira a senha ...">
            </div>

            <div class="btn">
                <input type="submit" value="Login" name="login" class="login">
                <input type="submit" value="Limpar" name="limpar" class="clear">
            </div>

            <div class="resultado">
                <?php 
                    if(isset($_POST["user"], $_POST["senha"])) {
                        $user = $_POST["user"];
                        $senha = $_POST["senha"];

                        if ($user === "admin" && $senha === "1234") {
                            echo "<p>Login completo! Prossiga. ✅<p>";
                        } else { 
                            echo "<p>Nome de usuário ou senha inválidos. Tente Novamente ❌<p>";
                        }
                    }


                    if(isset($_POST["liMpar"])) {
                        header("Location: index.php");
                        exit;
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>