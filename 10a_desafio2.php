<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Nome dos produtos:</label>
        <input type="text" name="nome" required> <br>

        <label for="preco">Preço:</label>
        <input type="number" step="0.01" name="preco" required> <br>

        <button type="submit">Cadastrar produto</button>
    </form>

    <?php    

        //Verifica se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recebe os valores enviados pelo formulário 
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];

        // Valida se o nome não está vazio e se o preço é um número maior que 0
        if (!empty($nome) && is_numeric($preco) && $preco > 0) {
            // Se a validação passar, conecta ao BD
                $conn = new mysqli("localhost", "root", "Senai@118", "exercicio");
            if ($conn->connect_error) {
                    die("Falha na conexão: " . $conn->connect_error);
                }

            // Insere o registro no BD
            $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome', $preco)";
            if ($conn->query($sql) === TRUE) {
                echo "<p style='color: Darkgreen;'>Produto cadastrado com sucesso!</p>";
            } else {
                echo "<p style='color: red;'>Erro ao cadastrar o produto.</p>";
            }
            $conn->close();
        } else {
            // Se a validação falhar, exibe uma mensagem de erro
            echo "<p style='color: red;'>Erro: Preencha todos os campos corretamente. O preço deve ser maior que zero.</p>";
        }
    }
        
    ?>
</body>
</html>