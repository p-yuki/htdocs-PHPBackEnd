<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
</head>
<body>
    <div class="container">
        <h2>Lista de Compras</h2>

        <?php
            $lista = ["Arroz", "Feijão", "Café", "Macarrão", "Óleo", "Azeite"];

            $i = 1;

            foreach ($lista as $item) {
                echo $i . " - " . $item . "<br>";
                $i++;
            }
        ?>
    </div>
</body>
</html>