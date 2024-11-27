<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/principal.css" rel="stylesheet"> <!-- Referência para o CSS personalizado -->
</head>

<body class="bg-dark text-light">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <form action="verificacao.php" method="post" class="w-100" style="max-width: 400px;">
            <div class="border p-4 rounded-3 shadow-sm" style="background-color: #1e1e1e;">

                <h2 class="text-center mb-4" style="color: #f8c200; font-family: 'Georgia', serif;">Login</h2>

                <div class="mb-4">
                    <label class="form-label" for="usuario">Usuário:</label>
                    <input type="text" name="campo-nome" class="form-control" id="usuario" required placeholder="Digite seu usuário">
                </div>

                <div class="mb-4">
                    <label class="form-label" for="password">Senha:</label>
                    <input type="password" name="campo-senha" class="form-control" id="password" required placeholder="Digite sua senha">
                </div>

                <div class="d-grid mt-4">
                    <button class="btn btn-lg btn-outline-warning" type="submit">Login</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
