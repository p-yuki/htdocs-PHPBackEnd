<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média dos Alunos</title>
</head>
<body>
    <div class="container">
        <form action="index.php" method="post">
        <div class="dados">
                <label for="">Nota 1</label>
                <input type="text" name="nota1" id="n1">
            </div>

            <div class="dados">
                <label for="">Nota 2</label>
                <input type="text" name="nota2" id="n2">
            </div>

            <div class="dados">
                <label for="">Nota 3</label>
                <input type="text" name="nota3" id="n3">
            </div>

            <div class="btn">
                <input type="submit" value="Calcular" name="calcular">
                <input type="submit" value="Limpar" name="limpar">
            </div>

            <div class="resultado">
                <?php
                    if(isset($_POST["nota1"], $_POST["nota2"], $_POST["nota3"])) {
                        $nota1 = floatval($_POST["nota1"]);
                        $nota2 = floatval($_POST["nota2"]);
                        $nota3 = floatval($_POST["nota3"]);

                        $media = ($nota1 + $nota2 + $nota3) / 3;

                        $mediaFinal = number_format($media, 2, ",", ".");

                        if ($nota1 > 10 or $nota2 > 10 or $nota3 > 10) {
                            echo "<p>Valor inválido! <br> Informe nota de 0 a 10</p>";
                        } else {
                            if ($media >= 6) {
                                echo "<p>Média Final: $mediaFinal. Aprovado! 😎</p>";
                            } elseif ($media >= 3) {
                                echo "<p>Média Final: $mediaFinal. Recuperação! 😥</p>";
                            } else {
                            echo "<p>Média Final: $mediaFinal. Reprovado! 😭</p>";
                            }
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