<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de IMC</h1>
        <form action="index.php" method="post">
            <div class="dados">
                <label for="">Peso (kg): </label>
                <input type="text" name="peso" id="peso">
            </div>

            <div class="dados">
                <label for="">Altura (cm): </label>
                <input type="text" name="altura" id="altura">
            </div>

            <div class="btn">
                <input type="submit" value="Calcular" name="calcular">
                <input type="submit" value="Limpar" name="clear">
            </div>

            <div class="resultado">
                <?php
                    if(isset($_POST["peso"], $_POST["altura"])) {

                        // Declaração das variáveis
                        $peso = floatval($_POST["peso"]);
                        $altura = floatval($_POST["altura"]);

                        // Cáculo do imc
                        $imc = $peso / ($altura ^ 2);

                        // Resultado com 2 casas decimais
                        $imcFinal = number_format($imc, 2, ",", ".");

                        

                            if ($imcFinal >=30) {
                                echo "<p> IMC: $imcFinal. Obeso</p>";
                            } elseif ($imcFinal >=25) {
                                echo "<p>IMC: $imcFinal. Sobrepeso</p>";
                            } elseif ($imcFinal >=18.5) {
                                echo "<p> IMC: $imcFinal. Normal</p>";
                            }else {
                                echo "<p> IMC: $imcFinal. Abaixo do peso</p>";
                            }
                    }
                    if(isset($_POST["clear"])) {
                        header("Location: index.php");
                        exit;
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>