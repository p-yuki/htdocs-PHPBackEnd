<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Lojas</title>
</head>
<body>
    <div class="container">
        <h2>Lista de Lojas</h2>

        <?php
            $lojas = ["Santo André", "São Bernardo", "São Caetano", "Diadema", "Mauá"];

            for ($i = 0; $i < count($lojas); $i++) {
                echo $lojas[$i] . "<br>";
            }
        ?>
    </div>
</body>
</html>