<?php
session_start();

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"] ?? "";
    $cor = $_POST["cor"] ?? "";

    if (!empty($nome) && !empty($cor)) {
        $_SESSION["nome"] = $nome;
        $_SESSION["cor"] = $cor;
        header("Location: 15d_perfil.php");
        exit;
    } else {
        $erro = "Por favor, preencha todos os campos!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Escolha sua cor</title>
</head>
<body>
    <h2> Escolha seu perfil</h2>

    <?php if (isset($erro)) echo "<p style='color:red;'>$erro</p>"; ?>

    <form method="POST">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Cor favorita:</label><br>
        <select name="cor" required>
            <option value="">-- Selecione --</option>
            <option value="lightblue">Azul Marinho</option>
            <option value="lightgreen">Vinho</option>
            <option value="lightpink">Rosa Claro</option>
            <option value="lightyellow">Lilás</option>
            <option value="lightgray">Verde Claro</option>
        </select><br><br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>
