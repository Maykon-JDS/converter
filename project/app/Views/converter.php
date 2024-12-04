<?php

    use Classes\Converter;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../resources/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar bg-black">
            <div class="container-fluid">
                <div class="col">
                    <a href="/" style="text-decoration: none">
                        <h1 class="navbar-brand mb-0 h1 text-white">Converter</h1>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="mt-4 mb-4">
            <form action="../app/Controllers/ConverterController.php" method="get" class="container">
                <div class="mb-3">
                    <label for="decimal" class="form-label">Número em Decimal</label>
                    <input type="number" class="form-control" name="decimal" id="decimal" value="<?= $_SESSION["decimal"] ?? 0 ?>">
                </div>
                <div class="mb-3">
                    <label for="binary" class="form-label">Número em Binário</label>
                    <input type="number" class="form-control" name="binary" id="binary" value="<?= $_SESSION["binary"] ?? 0 ?>">
                </div>
                <button type="submit" name="converter" value="decimal" class="btn btn-primary">Converter para Binário</button>
                <button type="submit" name="converter" value="binary" class="btn btn-primary">Converter para Decimal</button>
            </form>
        </div>
    </main>
    <footer class="container-fluid bg-black pt-4 pb-4 ">
        <p class="text-center text-white mb-0"><a href="https://github.com/Maykon-JDS" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">GitHub - MaykonJDS</a></p>
    </footer>
</body>

</html>