<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Primeiro Programa em PHP</title>
</head>
<body>


    <h1>
        <?php
            echo "Olá, mundo";

        ?>
    </h1>

    <?php
        echo '<h1> Olá, mundo </h1>';
    ?>

    <h2>Variaveis em PHP</h2>

    <p>

        <?php
            $nome = 'Pedro';
            $email = 'pedro@gmail.com';

            echo "Nome: $nome <br>";
            echo "Email: $email <br>";
        ?>

    </p>

    <h2>Contantes em PHP</h2>

    <p>
        <?php

            const faculdade = "UMC";
            const cidade = "Mogi das Cruzes";

            echo "faculdade: " . faculdade . "<br>";
            echo "Cidade: " . cidade . "<br>";

        ?>
    </p>

    
</body>
</html>