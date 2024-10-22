<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comissão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="get">
        <h2>Calcular Comissão</h2>
        <div>
            <label for="">Valor do produto:</label>
            <input type="text" name="n1" id="n1" placeholder="Insira o valor ...">
        </div>

        <div class="calcular">
            <input type="submit" value="Calcular">
        </div>

        <?php
            if (isset($_GET["n1"])) {
                
            $n1 = $_GET["n1"];

            $comis = $n1 * 0.05;
            echo "O valor da comissão é: R$" . $comis . ".";
            }
        ?>
    </form>
</body>
</html>