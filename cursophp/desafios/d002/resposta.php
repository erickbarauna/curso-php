<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Trabalhando com Números Aleatórios</h1>
    </header>
    <main>
        <?php
            // rand() = 1951 - Linear Congrential Generator
            // mt_rand() = 1997 - Mersenne Twister
            // A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
            // random_int() gera números aleatórios criptograficamento seguro - porem é a mais lenta

            $NumeroMin = $_GET['numeromin'];
            $NumeroMax = $_GET['numeromax'];

            $NumeroRand = rand($NumeroMin, $NumeroMax);

            echo "<p>Gerando um número aleatório entre $NumeroMin e $NumeroMax...</p>";
            echo "<p>O valor gerado foi $NumeroRand</p>";
        ?>
        <input type="button" value="&#x1F504;Gerar outro" onclick="javascript:document.location.reload()">
        <input type="button" value="&#x2B05;Voltar" onclick="javascript:history.back()">
    </main>
</body>
</html>