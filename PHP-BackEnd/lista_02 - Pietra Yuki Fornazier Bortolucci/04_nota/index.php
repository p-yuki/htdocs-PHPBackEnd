<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Nota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Verificar nota</h1>
        <form action="index.php" method="post">
            <div class="nota">
                <label for="">Nota: </label>
                <input type="text" name="nota" id="n">
            </div>

            <div class="btn">
                <input type="submit" value="Verificar" name="verificar">
                <input type="submit" value="Limpar" name="clear">
            </div>

            <div class="resultado">
                <?php
                if(isset($_POST["nota"])) {

                    $nota = floatval ($_POST["nota"]);

                    if ($nota > 100) {
                        echo "<p>Valor inválido! Informe a nota de 0 à 10</p>";
                    } else {
                        if ($nota >= 60) {
                            echo "<p>Aprovado! 😁</p>";
                        } elseif ($nota >=30) {
                            echo "<p>Recuperação! 😥</p>";
                        } else {
                        echo "<p>Reprovado! 😭</p>";
                    }
                }
            }
                if(isset($_POST["clear"])) {
                    header("Location: index.php");
                    exit;
                }
                ?>
            </div>
        </form>
    </div>
</body>
</html>