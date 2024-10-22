<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada cmo For</title>
</head>
<body>
    <div class="container">
        <h2>Tabuada</h2>

        <?php
            $tab = 1;

            for ($cont = 1; $cont <= 10; $cont++) {
                echo $tab . " x " . $cont . " = " . ($tab * $cont) . "<br>";
            }
        ?>
    </div>
</body>
</html>