<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Frutas</title>
</head>
<body>
    <div class="container">
        <h2>Lista de Frutas</h2>

        <?php
            $frutas = ["Banana", "Maçã", "Melancia", "Pêra", "Uva"];

            foreach ($frutas as $fruta) {
                echo $fruta . "<br>";
            }
        ?>
    </div>
</body>
</html>