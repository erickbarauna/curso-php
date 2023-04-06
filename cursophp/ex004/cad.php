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
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            // var_dump($_GET);
            // var_dump($_REQUEST); // Junção de $_POST $_GET $_COOKIES 


            // Tratamento de erros que gera um nome padrão se 
            // o usuário não preecher os campos.
            // $Nome = $_GET["nome"] ?? "Fulano";
            // $Sobrenome = $_GET["sobrenome"] ?? "de Tal";
            
            if ($_GET["nome"] == null || $_GET["sobrenome"] == null) {
                echo "Ops! Preencha todo o formulário para ver a mensagem!";
            }
            else {
                echo "<p>É um grande prazer te conhecer <strong>$Nome $Sobrenome<strong></p>";
            }
            
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>