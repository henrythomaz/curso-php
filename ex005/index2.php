<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações</title>
</head>
<body>
    <?php
    $a = $_GET["a"];
    $b = $_GET["b"];
    $op = $_GET["op"];
    $result = ($op == "sum") ? $a + $b :
    (($op == "sub") ? $a - $b :
    (($op == "mult") ? $a * $b :
    (($op == "div") ? $a / $b :
    (($op == "mod") ? $a % $b : "Valor Indefinido"))));

    echo $result;
    ?>
</body>
</html>