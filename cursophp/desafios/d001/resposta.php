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
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
            $Numero = $_GET['numero'];

            if ($Numero == null)
            {
                echo "<p>Ops! Preencha o formulário</p>";
            }
            else 
            {
                echo "<p>O número escolhido foi <strong>$Numero</strong></p>";
                echo "<p>O seu <i>antecessor</i> é " .$Numero - 1 ."</p>";
                echo "<p>O seu <i>sucessor</i> é " .$Numero + 1 ."</p>";
            }
        ?>

        <input type="button" value="&#x2B05; Voltar" onclick="javascript:history.back()">
        <!-- Outras formas de obter o mesmo resultado do evento onclick
             
             onclick="javascript:window.location.href='index.html'"
             onclick="javascript:history.go(-1)"
        -->
    </main>
    <script>
        // O cód abaixo é == ao cód no evento onclick do input
        // function Voltar(){
        //     history.back();
        // }
    </script>
</body>
</html>