<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condições</title>
</head>
<body>
    <?php
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 2025;
        $i = date("Y") - $ano;
        echo"Você nasceu em $ano e tem $i anos <br>";
        if ($i <= 16) {
            $v = "não pode votar";
            $d = "não pode dirigir";
        } elseif ($i <= 18 || $i >= 65) {
            $v = "voto opcional";
            $d = "não pode dirigir";
        } else {
            $v = "ja pode votar";
            $d = "ja pode dirigir";
        }
        echo"$v e $d"
    ?>
</body>
</html>