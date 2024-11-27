<?php

if (isset($_COOKIE['carrinho'])) {
    setcookie('carrinho', '', time() - 3600, '/'); 
}


header('Location: carrinho.php'); 
exit;
?>
