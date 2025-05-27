<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Nota</title>
    <link rel="stylesheet" href="../estilos/styleVerificar.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.php">Início</a></li>
                <li><a href="cadastro.php">Cadastrar Usuário</a></li>
                <li><a href="">Listas Usuários</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="containerSection">
            <form action="atualizarNota.php" method="post">
                <select name="curso" id="curso" class="estilo">
                <option value="ads">Análise e Desenvolvimento de Sistemas</option>
                <option value="engenharia_software">Engenharia de Software</option>
                <option value="sistemas_informacao">Sistema da Informação</option>
                <option value="ciencias_computacao">Ciências da Computação</option>
                </select>
                <input type="submit" value="buscar">
                </form>
        </section>

        <section>

            <?php

                //Verificar se $POST['CURSO'] esta vazio
                if (isset($_POST['curso'])) {

                    //Chamar a conexao com o bd
                    include'../conexao/conexao.php';

                    //salvar a informação do curso selecionado
                    $curso = $_POST["curso"];

                    //Consulta SQL
                    $sql = "SELECT * FROM usuarios WHERE curso = ?";

                    //Preparar a consulta SQL junto da conexao
                    $stmt = $conn->prepare($sql);

                    //Verificar se a conexao foi feita com sucesso
                    if ($stmt) {
                        $stmt->bind_Param("s", $curso);
                        $stmt->execute();
                        $resultado = $stmt->get_result();

                        if ($resultado->num_rows > 0) {
                            echo"
                            <form action='processaNota.php' method = 'post' id = 'form-nota'>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Sobrenome</th>
                                            <th>Nota Atividade</th>
                                            <th>Nota Prova</th>
                                        </tr>
                                    </thead>
                                    <tbody> ";
                                        while($row = $resultado->fetch_assoc()){
                                            echo "
                                                <tr>
                                                    <td>{$row['ID']}</td>
                                                    <td>{$row['NOME']}</td>
                                                    <td>{$row['SOBRENOME']}</td>
                                                    <td>
                                                        <input type='number' name='nota_atividade[{$row['ID']}]' step='1' required> 
                                                    </td>
                                                    <td>
                                                        <input type='number' name='nota_prova[{$row['ID']}]' step='1' required>
                                                    </td>
                                                </tr> ";
                                            }
                                echo "
                                        </tbody>
                                    </table>
                                "; 
                            echo 
                                "<input type='submit' value='Enviar'>
                                </from>";
                        } else{
                            echo "<div class = 'mensagem erro'> Curso $curso não possui usuários</div>";
                        }

                        $stmt->close();
                    }

                    $conn->close();
                }    
            ?>
        </section>
    </main>
</body>
</html>