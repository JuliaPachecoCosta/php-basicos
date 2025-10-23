<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "Senai@118";
    $dbname = "exercicio";

    try {
        // tenta criar uma conexão com o BD
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            throw new Exception("Falha na conexão: " . $conn->connect_error);
        }

        echo "Conexão realizada com sucesso.";

    } catch (Exception $e) {
        // Exibe uma mensagem de erro amigável
        echo "Erro ao conectar ao banco de dados." . $conn->connect_error;
    }

?>
<!-- Para criar o BD -->
<!-- CREATE DATABASE exercicio; -->

<!-- Para criar a Tabela -->
<!-- CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
); -->


