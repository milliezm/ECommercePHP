<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    $usuario = "adm";
    $senha = "adm123";
   


    $md5Hash = md5($senha);

    $usuarioLogin = $_POST["campo-nome"];
    $senhaLogin = $_POST["campo-senha"];


    $md5HashLogin = md5($senhaLogin);

    if ($usuarioLogin == $usuario) {
        if ($md5HashLogin == $md5Hash) {
            header('Location: principal.php');
        } else {
            echo "Login inválido. <a href='index.php'>Tente novamente</a>.";
        }
    }
    ?>

    

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>