<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Lojas</title>
</head>
<body>
    <div class="container">
        <h1>Lista de Lojas</h1>

        <form action="index.php" method="post">
            <div class="dados">
                <label for="">Indique o código</label>
                <input type="text" name="codigo" id="codigo">
            </div>

            <div class="btn">
                <input type="submit" value="Exibir" name="exibir">
                <input type="submit" value="Limpar" name="limpar">
            </div>

            <div class="resultado">
                <?php
                    if(isset($_POST["codigo"])) {
                        $loja_selecionada = intval($_POST["codigo"]);

                        $lojas = ["Santo André", "São Bernardo", "São Caetano", "Diadema", "Mauá"]; 

                        $loja_encontrada = false;

                        foreach($lojas as $i => $loja) {
                            if($loja_selecionada == ($i + 1)) {
                                echo ($i + 1) . " - " . $loja . "<br>";
                                $loja_encontrada = true;
                                break;
                            }
                        }

                        if(!$loja_encontrada) {
                            echo "Loja inválida! <br>";
                        }
                    }

                    if(isset($_POST["limpar"])) {
                        header("Location: index.php");
                        exit;
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>