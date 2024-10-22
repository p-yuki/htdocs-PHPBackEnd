<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter Euros</title>
</head>
<body>
    <form action="" method="get">
        <h2>Conversora</h2>
        <div>
            <label for="">Euros:</label>
            <input type="text" name="n1" id="n1" placeholder="Insira o valor em euros ...">
        </div>

        <div class="calcular">
            <input type="submit" value="Calcular">
        </div>

        <?php
            if (isset($_GET["n1"])) {
                $n1 = $_GET["n1"];

                $soma = $n1 * 6.01;
                echo "O valor em reais é de: R$" . $soma . ".";
        }
        ?>
    </form>
</body>
</html>