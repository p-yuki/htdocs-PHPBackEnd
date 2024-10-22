<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Opções</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Menu Opções</h1>
        
        <form action="" method="post">
            <div class="dados">
                <label for="">Informe uma opção</label>
                <input type="text" name="opcao" id="opcao" placeholder="Informe uma opção ...">
            </div>

            <div class="btn">
                <input type="submit" value="Exibir" name="exibir" id="show">
                <input type="submit" value="Limpar" name="limpar" id="clear">
            </div>

            <div class="resultado">
                <?php
                    if (isset($_POST["opcao"])) {

                        $opcao = $_POST["opcao"];

                        switch ($opcao) {
                            case 1:
                                $opcao = "Nossos Produtos";
                                break;
                            case 2:
                                $opcao = "Suporte Técnico";
                                break;
                            case 3:
                                $opcao = "Financeiro";
                                break;
                            case 4:
                                $opcao = "Outros Assuntos  ";
                                break;
                            default:
                                $opcao = "Opção Inválida 🚫";
                        }
                        echo "<p>Opção: $opcao.</p>";
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