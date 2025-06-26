<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <?php
    $a = 3;
    echo "$a </br>";
    $b = 5;
    echo "$b </br>";
// Operadores de Atribuição
    // Soma
    $c = $a;
    $a += $b;
    echo "$c + $b = $a </br>";
    // Sub
    $c = $b;
    $b -= $a;
    echo "$c - $a = $b </br>";
    // Mult
    $c = $a;
    $a *= $b;
    echo "$c * $b = $a </br>";
    // Div
    $c = $b;
    $b /= $a;
    echo "$a / $c = $b </br>";
    // Mod
    $c = $b;
    $b %= $a;
    echo "$c mod $a = $b </br>";

// Operadores de Incremento
    // Pré-Incremento
    ++$a;
    echo "$a e $b </br>";
    // Pré-Decremento
    --$b;
    echo "$a e $b </br>";
    // Pós-Incremento
    $b++;
    echo "$a e $b </br>";
    // Pós-Decremento
    $a--;
    echo "$a e $b </br>";

// Variáveis Referenciadas
    $a = &$b;
    echo "$a e $b </br>";
    $a += 5;
    echo "$a e $b </br>";

// Variáveis de variáveis
    $site = "cursoemvideo";
    $$site = "CursoPHP";
    echo"$site e $cursoemvideo";
    ?>
</body>
</html>