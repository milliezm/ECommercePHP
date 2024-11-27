<?php

$conexao = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexao, "lojaguitarra");
mysqli_set_charset($conexao, "UTF8");

$carrinho = isset($_COOKIE['carrinho']) ? explode(',', $_COOKIE['carrinho']) : [];

if (!empty($carrinho)) {
    $ids = implode(',', array_map('intval', $carrinho)); 
    $query = mysqli_query($conexao, "SELECT nome, preco, marca FROM produto WHERE id IN ($ids)");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/carrinho.css" rel="stylesheet">
</head>

<body class="bg-dark text-light">
    <div class="container mt-5">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom navbar">
            <div class="col-md-3 mb-2 mb-md-0">
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="principal.php" class="nav-link px-2 link-secondary">Produtos</a></li>
                <li><a href="carrinho.php" class="nav-link px-2">Carrinho de Compras</a></li>
                <li><a href="index.php" class="nav-link px-2">Login</a></li>
            </ul>
        </header>

        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal header-title">Seu Carrinho</h1>
        </div>

        <?php if (!empty($carrinho) && mysqli_num_rows($query) > 0): ?>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Guitarra</th>
                            <th>Marca</th>
                            <th>Preço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($produto = mysqli_fetch_assoc($query)): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($produto['nome']); ?></td>
                                <td><?php echo htmlspecialchars($produto['marca']); ?></td>
                                <td>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="alert alert-warning text-center">Seu carrinho está vazio.</div>
        <?php endif; ?>

        <div class="d-flex justify-content-between mt-4">
            <a href="principal.php" class="btn btn-lg btn-outline-warning">Voltar para os produtos</a>
            <a href="limpar_carrinho.php" class="btn btn-lg btn-outline-danger">Limpar Carrinho</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
