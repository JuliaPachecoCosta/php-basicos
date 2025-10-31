<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION["nome"]) || !isset($_SESSION["cor"])) {
    header("Location: 15d_login.php");
    exit;
}

$nome = $_SESSION["nome"];
$cor = $_SESSION["cor"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perfil de <?php echo htmlspecialchars($nome); ?></title>
</head>
<body style="background-color: <?php echo htmlspecialchars($cor); ?>;">
    <h1> Bem-vindo, <?php echo htmlspecialchars($nome); ?>!</h1>
    <p>Essa página foi personalizada com sua cor favorita.</p>

    <a href="15d_logout.php">Sair E Limpar perfil</a>
</body>
</html>