<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <?php
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $falta = $_GET["f"];
    $m = ($nota1 + $nota2)/2;
    echo"A media entre $nota1 e $nota2 é $m </br></br>";
    $status = $m >= 6 && $falta <= 25 ? "Passou de ano" : "Não Passou de ano";
    echo $status
    ?>
</body>
</html>