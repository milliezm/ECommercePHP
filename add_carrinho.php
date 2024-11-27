<?php
if (isset($_POST['produto_id'])) {
    $produto_id = $_POST['produto_id'];

    
    $carrinho = isset($_COOKIE['carrinho']) ? explode(',', $_COOKIE['carrinho']) : [];

    if (!in_array($produto_id, $carrinho)) {
        $carrinho[] = $produto_id; 
    }
    setcookie('carrinho', implode(',', $carrinho), time() + (7 * 24 * 60 * 60), "/");

    header("Location: principal.php");
    exit;
}
?>

