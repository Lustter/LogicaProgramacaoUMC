<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "faculdade";

//Criando conexão
$conn = new mysqli($servername, $username, $password,$dbName);

//Validação de Conexão
if ($conn->connect_error) {
    echo "Conexão Falhou";
}else{
    echo "Conexão feita com sucesso";
}
?>