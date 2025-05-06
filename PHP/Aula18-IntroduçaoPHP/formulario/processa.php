<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="stylephp.css">
</head>
<body>

    <main class = "container">
        <h1>Dados Enviados</h1>
        
        <?php
        $nome = $_POST["nome"];//Pedro
        $sobrenome = $_POST["sobrenome"];//Miho
        $email = $_POST["email"];//pedromiho@gmail.com
        $senha = $_POST["senha"];//Pedro



        echo "<p><strong>O seu nome é: </strong> $nome </p>";
        echo "<p><strong>O seu sobrenome é: </strong> $sobrenome </p>";
        echo "<p><strong>O seu email é: </strong> $email </p>";
        echo "<p><strong>O seu senha é: </strong> $senha </p>";
        ?>

        <a href="index.html">Volte cadastro</a>

    </main>
    
</body>
</html>