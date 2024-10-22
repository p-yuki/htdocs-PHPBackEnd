<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semana</title>
</head>
<body>
    <div class="container">
        <h1>Semana</h1>
        
        <form action="" method="post">
            <div class="dados">
                <label for="">Informe o dia da semana: </label>
                <input type="text" name="sem" id="sem" placeholder="Informe um dia ...">
            </div>

            <div class="btn">
                <input type="submit" value="Exibir" name="exibir" id="show">
                <input type="submit" value="Limpar" name="limpar" id="clear">
            </div>

            <div class="resultado">
                <?php
                    if (isset($_POST["sem"])) {

                        $sem = $_POST["sem"];

                        switch ($sem) {
                            case "Segunda":
                            case "segunda": 
                            case "Terça": 
                            case "terça": 
                            case "Quarta": 
                            case"quarta": 
                            case "Quinta": 
                            case "quinta": 
                            case "Sexta": 
                            case "sexta":
                                $sem = "Dia Útil 😉";
                                break;
                            case "Sábado": 
                            case "Sabado": 
                            case "sábado": 
                            case "sabado": 
                            case "Domingo": 
                            case "domingo" :
                                $sem = "Fim De Semana 🎉";
                                break;
                            default:
                                $sem = "Opção Inválida 🚫";
                        }
                        echo "<p>$sem.</p>";
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