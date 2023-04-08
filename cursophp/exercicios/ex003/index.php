<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Tipos Primitivos do PHP</h1>
    <?php 
        // 0x = hexadecimal 
        // 0b = binário
        // 0 = Octal
        // $numero = 0x1A;
        // echo "O valor da variável é $numero";

        $v = 300;
        $v1 = 45.2;
        $v2 = true;
        $v3 = "vinicinDuGrau";
        $v4 = null;

        $v8 = [1, "hello", false, 4.2];

        class Pessoa {
            private string $nome;
        }

        $v9 = new Pessoa;

        var_dump($v, $v1, $v2, $v3, $v4, $v8, $v9);

        echo "<br><h1>Coerção de Variável</h1>";

        $v5 = 3e2; 
        var_dump($v5); 
        $v5 = (int)/*ou*/(integer) 3e2;
        var_dump($v5); 

        $v6 = "950";
        var_dump($v6); 
        $v6 = (float) "950";
        var_dump($v6); 

        echo "<br><h1>Cuidados com tipo Booleano</h1>";
        // O valor false no caso do php dentro de um echo ou de 
        // um print é vazio
        // Se o valor for true mostrará qualquer outro valor 
        // que não seja falso
        // Se o valor for false mostrará (0, null ou "")

        $v7 = false; 
        var_dump($v7);
        print("O valor para v7 é $v7");

        $v7 = true; 
        var_dump($v7);
        print("O valor para v7 é $v7");
    ?>
</body>
</html>