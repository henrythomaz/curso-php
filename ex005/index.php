<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
</head>
<body>
    <?php
    $a = 3;
    $b = 5;
    // Operadores Relacionais
        // Maior
        $r = $a > $b;
        echo "$r </br>";
        // Menor
        $r = $a < $b;
        echo "$r </br>";
        // Maior ou Igual
        $r = $a >= $b;
        echo "$r </br>";
        // Menor ou Igual
        $r = $a <= $b;
        echo "$r </br>";
        // Diferente
        $r = $a != $b;
        echo "$r </br>";
        // Igual
        $r = $a == $b;
        echo "$r </br>";
        // Diferença Restrita
        $c = "5";
        $r = $c !== $b;
        echo "$r </br>";
        // Igual
        $c = "3";
        $r = $c === $a;
        echo "$r </br>";
    
    // Operador Ternário

        $r = $a !== "3"? "false" : "true";
        echo "$r </br>";

    // Operadores Lógicos
        // E - &&
        $r = $a > $b && $a < $c ? "true" : "false";
        echo "$r </br>";
        // OU - ||
        $r = $a > $b || $a < $c ? "true" : "false";
        echo "$r </br>";
        // NÂO - !
        $r = !($a > $b)? "true" : "false";
        echo "$r </br>";
        // XOR - xor
        $r = $a > $b xor $a < $c ? "true" : "false";
        echo "$r </br>";
    ?>
</body>
</html>