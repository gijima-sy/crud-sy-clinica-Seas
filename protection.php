
 
<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (!isset($_SESSION['id'])) {
    die("Você não pode acessar essa página, porque não está logado.<p><a href='index.php'>Entrar</a></p>");
}
?>
