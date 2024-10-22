<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $frase = "Ontem à noite estudei PHP antes de dormir.";
    ?>

    <div class="container">
        <p>
            <?php
                echo strtoupper($frase)
            ?>
        </p>
    </div>
</body>
</html>