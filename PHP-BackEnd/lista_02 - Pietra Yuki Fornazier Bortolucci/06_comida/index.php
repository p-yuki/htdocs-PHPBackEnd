<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width={device-width}, initial-scale=1.0">
    <title>Comida</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Opções de Comida</h1>
        <form action="" method="post">
            <div class="dados">
                <label for="">Informe uma opção</label>
                <input type="text" name="opcao" id="opcao">
            </div>

            <div class="btn">
                <input type="submit" value="Exibir" name="exibir" id="show">
                <input type="submit" value="Limpar" name="clear" id="clear">
            </div>

            <div class="resultado">
                <?php
                    if (isset($_POST["opcao"])) {

                        $opcao = $_POST["opcao"];

                        switch ($opcao) {
                            case 1:
                                $opcao = "Pizza 🍕";
                                break;
                            case 2:
                                $opcao = "Hambúrguer 🍔";
                                break;
                            case 3:
                                $opcao = "Salada 🥗";
                                break;
                            case 4:
                                $opcao = "Pastel 🥟";
                                break;
                            case 5:
                                $opcao = "Suco 🧃";
                                break;
                            default:
                            $opcao = "Opção Inválida ❌";                                                              
                        }
                        echo "<p>Escolha: $opcao</p>";
                    }

                    if (isset($_POST["clear"])) {
                        header("Location: index.php");
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>