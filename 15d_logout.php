<?php
session_start();
session_unset(); // Remove todas as variáveis da sessão
session_destroy(); // Destroi a sessão
header("Location: 15d_login.php");
exit;
?>