<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../resources/css/reset.css">
    <link rel="stylesheet" href="../../resources/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script type="module" src="./resources/lib/react/config.js"></script>

    <title>Converter</title>
</head>

<body>
    <script>
        window.sessionStorage.setItem("session", atob("<?php echo(base64_encode(json_encode($_SESSION))) ?>"));
    </script>
    <div id="app-react"></div>
    <script type="module" src="http://localhost:8002/@vite/client" crossorigin></script>
    <script type="module" src="http://localhost:8002/main.jsx" crossorigin></script>
</body>

</html>