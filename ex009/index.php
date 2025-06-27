<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While e Do While</title>
</head>
<body>
    <?php
    // While
        $num = 1;
        while($num <=10) {
            echo"$num <br>";
            $num++;
        }
    // Do While
        $num = 10;
        do {
            echo"$num <br>";
            $num--;
        }
        while($num >=1)
    ?>
</body>
</html>