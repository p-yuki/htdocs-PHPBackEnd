<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votos</title>
</head>
<body>
    <div class="container">
    <h1>Verificação de Votos</h1>

        <form action="index.php" method="post">
            <div class="dados">
                <label for="">Nome: </label>
                <input type="text" name="nome" id="nome" placeholder="Informe seu nome ...">
            </div>

            <div class="dados">
                <label for="">Idade: </label>
                <input type="text" name="idade" id="idade" placeholder="Informe sua idade ...">
            </div>

            <div class="btn">
                <input type="submit" value="Exibir" name="exibir" class="show">
                <input type="submit" value="Limpar" name="limpar" class="clear">
            </div>

            <div class="resultado">
                <?php 
                    if(isset($_POST["nome"], $_POST["idade"])) {
                        $nome = $_POST["nome"];
                        $idade = $_POST["idade"];

                        if ($idade >= 16) {
                            echo "<p>Olá, $nome! <br> Você tem $idade anos. Pode votar! 😉<p>";
                        } else { 
                            echo "<p>Olá, $nome! <br> Você tem $idade anos. Não pode votar! 😥<p>";
                        }
                    }

                    if(isset($_POST["limpar"])) {
                        header("Location: index.php");
                        exit;
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>