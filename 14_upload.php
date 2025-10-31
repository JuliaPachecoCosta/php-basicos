<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Imagem</title>
</head>
<body>
    <form method="post" action="" enctype="multipart/form-data">
        <label for="imagem">Selecione uma imagem:</label>
        <input type="file" name="imagem" accept="image/*" required><br>

        <button type="submit">Upload</button>
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
        // Caminho onde as imagens serão salvas
        $diretorio_destino = 'uploads/';

        // Verifica se a pasta existe, caso não, cria a pasta
        if (!is_dir($diretorio_destino)) {
            // Cria a pasta (diretorio) com permissôes
            // de acesso total (codigo 0777) e possibilidades de subdiretórios.
            mkdir($diretorio_destino, 0777, true);
        }

        // Armazena apenas o nomebase do arquivo (Ex.foto.jpg)
        $nome_arquivo = basename($_FILES['imagem']['name']);

        // Constrói o caminho completo. Ex.: (uploads/foto.jpg)
        $caminho_completo = $diretorio_destino . $nome_arquivo;

        // Mover o arquivo enviado para o diretório de destino
        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho_completo)) {
            echo "<p>Upload realizado com sucesso!</p>";
            echo "<img src='$caminho_completo' alt='Imagem enviada' style='max-width: 300px;'>";
        } else {
            echo "<p>Erro ao fazer upload do arquivo.</p>";
        }
    }
    ?>
    
</body>
</html>
