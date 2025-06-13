<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Aritméticas em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Soma</h1>
    <div>
        <?php
        // Soma
        $n1 = 3;
        $n2 = 4;
        $s = $n1 + $n2;
        echo"A soma de $n1 e $n2 é $s!"
        ?>
        <h1>Sub</h1>
        <?php
        // Sub
        $n1 = 5;
        $n2 = 5;
        $sub = $n1 - $n2;
        echo "A sub de $n1 e $n2 é $sub"
        ?>
        <h1>Multiplicação</h1>
        <?php
        // Multiplicação
        $n1 = 4;
        $n2 = 9;
        $mult = $n1 * $n2;
        echo "A multiplicação de $n1 e $n2 é $mult"
        ?>        
        <h1>Divisão</h1>
        <?php
        // Divisão
        $n1 = 5;
        $n2 = 5;
        $div = $n1 / $n2;
        echo "A divisão entre $n1 e $n2 é $div"
        ?>
        <h1>Módulo</h1>
        <?php
        // Módulo
        $n1 = 5;
        $n2 = 5;
        $mod = $n1 % $n2;
        echo "O módulo de $n1 e $n2 é $mod"
        ?>
    </div>
</body>
</html>