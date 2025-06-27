<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funções no PHP</title>
</head>
<body>
    <?php
        function soma($a, $b) {
            $s = $a + $b;
            return $s;
        }
        $a = $_GET["a"];
        $b = $_GET["b"];
        $s = soma($a, $b);
        echo"A soma entre $a e $b é $s"
    ?>
</body>
</html>