<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de usuario</title>
</head>
<body>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text"name="nome" required><br>

        <label for="senha">Senha:</label>
        <input type="password"name="senha" required><br>
        
        <button type="submit">Entrar</button>
    </form>

    <?php
        // Verifica se o formulário foi enviado 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recebe os valores enviados
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];

            // Abrir o arquivo usuarios.txt para leitura
            $arquivo = fopen('usuarios.txt', 'r');
            $login_sucesso  = false;

            // Ler cada linha do arquivo
            while (($linha = fgets($arquivo)) !== false) {
                list($usuario_arquivo, $senha_arquivo) = explode(';', trim($linha));

                // Verifica se o nome e a senha correspondem aos valores no arquivo
                if($nome == $usuario_arquivo && $senha == $senha_arquivo) {
                    $login_sucesso = true;
                    break; // Interromper o laço. Usuario localizado no arquivo 
                }
            };
            // fecha o arquivo
            fclose($arquivo);

            // Exibe a mensagem (feedback) de sucesso OU erro
            if($login_sucesso) {
                echo "<p style='color: darkgreen;'>Login realizado com sucesso, <br> Bem vindo(a) $nome!</p.";
                
            } else {
                echo "<p style='color: red;'>Usuario ou senha incorretos.</p>";

            }
        }
        
    ?>

</body>
</html>