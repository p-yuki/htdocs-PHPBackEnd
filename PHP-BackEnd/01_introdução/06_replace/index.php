<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método Replace</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $frase = "Eu estou estudando Java no curso.";

        $nova_frase = str_replace("Java", "PHP", $frase)
    ?>

    <div class="container">
        <h1>Frase atualizada com o uso do método replace.</h1>
        <p>
            <?php echo $nova_frase; ?>
        </p>
    </div>
</body>
</html>