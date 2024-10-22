<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <div class="principal">

        <div class="container">

            <form action="" method="get">
                <h1>Informações</h1>
                
                <div class="div1">
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" id="nome" placeholder="Informe o seu nome...">
                </div>

                <div class="div2">
                    <label for="sobreNome">Sobrenome: </label>
                    <input type="text" name="sobreNome" id="sobreNome" placeholder="Informe o seu sobrenome...">
                </div>

                <div class="div3">
                    <label for="idade">Idade: </label>
                    <input type="text" name="idade" id="idade" placeholder="Informe a sua idade...">
                </div>

                <div class="div4">
                    <label for="altura">Altura: </label>
                    <input type="text" name="altura" id="altura" placeholder="Informe a sua altura...">
                </div>

                <div class="div5">
                    <label for="peso">Peso: </label>
                    <input type="text" name="peso" id="peso" placeholder="Informe o seu peso...">
                </div>

                <div class="div6">
                    <label for="profissao">Profissão: </label>
                    <input type="text" name="profissao" id="profissao" placeholder="Informe a sua profissão...">
                </div>

                <div class="div7">
                    <label for="cidade">Cidade: </label>
                    <input type="text" name="cidade" id="cidade" placeholder="Informe a sua cidade...">
                </div>
                
                <div class="btn">
                    <input type="submit" value="Enviar">
                </div>

                <?php
                if (isset($_GET["nome"], $_GET["sobreNome"], $_GET["idade"], $_GET["altura"], $_GET["peso"], $_GET["profissao"], $_GET["cidade"])) {

                    $nome = $_GET["nome"];
                    $sobreNome = $_GET["sobreNome"];
                    $idade = $_GET["idade"];
                    $altura = $_GET["altura"];
                    $peso = $_GET["peso"];
                    $profissao = $_GET["profissao"];
                    $cidade = $_GET["cidade"];

                    echo "Seu nome é " . $nome . " " .  $sobreNome . ". Você tem " . $idade . " anos, sua altura é de " . $altura . "m, seu peso é " . $peso . "kg, você trabalha como " . $profissao . " e mora em " . $cidade . ".";
                }
                ?>
            </form>

        </div>
    </div>

</body>
</html>