<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
    <?php
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[não informado]";
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[sem sexo]";
        $idade = date("Y") - $ano;
        echo"$nome e $sexo e tem $idade anos.";
    ?>
    <a href="index.html">Voltar</a>
</body>
</html>