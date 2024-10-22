<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <form action="" method="get">
        <h2>Calcular Média</h2>
        <div>
            <label for="">Nota 1:</label>
            <input type="text" name="n1" id="n1" placeholder="Insira a primeira nota ...">
        </div>

        <div>
            <label for="">Nota 2:</label>
            <input type="text" name="n2" id="n2" placeholder="Insira a segunda nota ...">
        </div>

        <div>
            <label for="">Nota 3:</label>
            <input type="text" name="n3" id="n3" placeholder="Insira a terceira nota ...">
        </div>

        <div>
            <label for="">Nota 4:</label>
            <input type="text" name="n4" id="n4" placeholder="Insira a quarta nota ...">
        </div>

        <div class="calcular">
            <input type="submit" value="Calcular">
        </div>

        <?php
            if (isset($_GET["n1"], $_GET["n2"], $_GET["n3"], $_GET["n4"])) {
                
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            $n3 = $_GET["n3"];
            $n4 = $_GET["n4"];

            $media = ($n1 + $n2 + $n3 + $n4) / 4;
            echo "A média final é: " . $media . ".";
            }
        ?>
    </form>
</body>
</html>