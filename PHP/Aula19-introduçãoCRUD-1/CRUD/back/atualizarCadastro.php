<?php

include("../conexao/conexao.php");
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $curso = $_POST["curso"];
    $prefixo = "1124";
    $id = $_POST["id"];

    echo var_dump($nome);
    echo var_dump($sobrenome);
    echo var_dump($email);
    echo var_dump($curso);
    echo var_dump($prefixo);
    echo var_dump($id);
    
    $sql = "UPDATE usuarios SET nome = ?,
                                    sobrenome = ?,
                                    email = ?,
                                    curso = ?
                                    WHERE ID = ?";

        $stmt = $conn ->prepare($sql);
        $stmt->bind_param("sssss", $nome, $sobrenome, $email, $curso, $id);
        $stmt->execute();
        
        $stmt->close();
        $conn->close();

        header("Location: atualizarNota.php");
?> 