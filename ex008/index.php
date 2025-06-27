<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>
    <?php
        $num = isset($_GET["num"]) ? $_GET["num"] : 0;
        $op = isset($_GET["op"]) ? $_GET["op"] : "dobro";
        switch($op) {
            case "dobro" :
                $d = $num * 2;
                echo "O dobro de $num é $d";
            break;
            case "cubo" :
                $c = $num * $num * $num;
                echo "O cubo de $num é $c";
            break;
            case "raiz" :
                echo "A raiz de $num é " . sqrt($num);
            break;
        }
    ?>
</body>
</html>