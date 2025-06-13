<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = "bruno";
        $fruta1 = (int)"10 maçãs";
        $fruta2 = (int)"27 kiwis";

        $frutas = $fruta1 + $fruta2;
        echo $nome. "tem". $frutas. "frutas";

        $idade = (int)"10 anos.";
        echo "e tem $idade anos.";
    ?>
</body>
</html>