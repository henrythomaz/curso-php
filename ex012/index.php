<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parâmetros dinâmicos</title>
</head>
<body>
    <?php
        // function soma($a, $b) {

        //     $s = $a + $b;
        //     return $s;
        // }
        // $a = $_GET["a"];
        // $b = $_GET["b"];
        // $s = soma($a, $b);
        // echo"A soma entre $a e $b é $s"
        function sumOfArgs() {
            $p = func_get_args(); // Array com os argumentos passados na função
            $tot = func_num_args(); // Numero de argumentos passados na função
            $s = 0;
            for ($i=0; $i < $tot; $i++) { 
                $s = $s + $p[$i];
            }
            return $s;
        }
        echo sumOfArgs(2, 7, 5, 0);
        echo"<br>";

        // Passagem de parâmetos por referência
        function dobro(&$x) {
            $x += 2;
            echo $x;
        }
        $a = 3;
        dobro($a);
        echo$a;
    ?>
</body>
</html>