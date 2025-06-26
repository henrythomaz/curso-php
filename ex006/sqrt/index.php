<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <?php
    $n = $_GET["n"];
    echo"A raiz quadrada de $n é " . sqrt($n);
    ?>
</body>
</html>