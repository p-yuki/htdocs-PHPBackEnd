<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altura</title>
</head>
<body>
    <div class="container">
    <h1>Comparação de Alturas</h1>

        <form action="index.php" method="post">
        <div class="dados">
                <label for="">Nome: </label>
                <input type="text" name="nome1" id="nome1" placeholder="Informe seu nome">
            </div>

            <div class="dados">
                <label for="">Altura: </label>
                <input type="number" name="altura1" id="altura1" placeholder="Insira a altura em cm ...">
            </div>

            <br>

            <div class="dados">
                <label for="">Nome: </label>
                <input type="text" name="nome2" id="nome2" placeholder="Informe seu nome">
            </div>

            <div class="dados">
                <label for="">Altura: </label>
                <input type="number" name="altura2" id="altura1" placeholder="Insira a altura em cm ...">
            </div>

            <div class="btn">
                <input type="submit" value="Exibir" name="exibir" class="show">
                <input type="submit" value="Limpar" name="limpar" class="clear">
            </div>

            <div class="resultado">
                <?php 
                    if(isset($_POST["nome1"], $_POST["nome2"], $_POST["altura1"], $_POST["altura2"])) {
                        $nome1 = $_POST["nome1"];
                        $nome2 = $_POST["nome2"];
                        $altura1 = $_POST["altura1"];
                        $altura2 = $_POST["altura2"];

                        if ($altura1 > $altura2) {
                            echo "<p>$nome1 com $altura1 cm, é mais alto que $nome2 com $altura2 cm. 😊<p>";
                        } else { 
                            echo "<p>$nome2 com $altura2 cm, é mais alto que $nome1 com $altura1 cm. 😉<p>";
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