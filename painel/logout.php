<?php
// Código para "Deslogar" do sistema
// Inicia a sessão
session_start();
// Destruir sessão
session_destroy();

// Readirecionar para página de login
header("Location: ../index.php");
exit;