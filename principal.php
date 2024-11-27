<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/principal.css" rel="stylesheet">

</head>

<body>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom navbar">
        <div class="col-md-3 mb-2 mb-md-0">
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="principal.php" class="nav-link px-2 link-secondary">Produtos</a></li>
            <li><a href="carrinho.php" class="nav-link px-2">Carrinho de Compras</a></li>
            <li><a href="index.php" class="nav-link px-2">Login</a></li>
        </ul>
    </header>
</div>

<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-4 fw-normal header-title">Six-String Sanctuary</h1>
</div>

<form action="add_carrinho.php" method="post">
    <div class="container py-3">
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <?php
            $conexao = mysqli_connect("127.0.0.1", "root", "");
            mysqli_select_db($conexao, "lojaguitarra");
            mysqli_set_charset($conexao, "UTF8");

            $query = mysqli_query($conexao, "SELECT id, nome, preco, marca, foto FROM produto");

            while ($result = mysqli_fetch_assoc($query)) { ?>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-body">
                            <img 
                                src="imgs/<?php echo htmlspecialchars($result['foto']); ?>" 
                                alt="<?php echo htmlspecialchars($result['nome']); ?>" 
                                style="max-width: 100%; height: auto;"
                            >
                            <ul class="list-unstyled mt-3 mb-4">
                                <li><?php echo htmlspecialchars($result['nome']) . "<br>"; ?></li>
                                <li class="text-body-secondary fw-light"><?php echo htmlspecialchars($result['marca']) . "<hr>"; ?></li>
                                <li><?php echo "R$" . number_format($result['preco'], 2, ',', '.') . "<hr>"; ?></li>
                            </ul>
                            <button 
                                name="produto_id" 
                                value="<?php echo $result['id']; ?>" 
                                type="submit" 
                                class="w-100 btn btn-lg btn-outline-primary">
                                Adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
