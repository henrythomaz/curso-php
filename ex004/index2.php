<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <?php
        $p = $_GET["p"];
        echo"Preço do produto: R$ " . number_format($p, 2);
        $p -= ($p*10/100);
        echo"</br>";
        echo"O preço do produto com 10% de desconto é R$ " . number_format($p, 2);
    ?>
</body>
</html>