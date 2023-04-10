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

            $valor = $_GET['valor'];
           $valor = str_replace([','], ['.'], $valor);

            $valorConvertido = $valor * 5.06;

            echo "<p>Seus R$$valor equivalem a US$$valorConvertido</p>";
            echo "<p><strong>*Cotação fixa de R$5,06</strong> informada diretamente no código</p>";
            echo "<p>09/04/2023</p>"
        ?>
        
        <input type="button" value="&#x2B05;Voltar" onclick="javascript:history.back()">
    </main>
</body>
</html>