<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <?php
        $numero1 = $_GET["numero1"];
        $numero2 = $_GET["numero2"];
        $operacao = $_GET["operacao"];
        if ($operacao == "+"){
            echo $numero1+$numero2;
        } elseif ($operacao == "-"){
            echo $numero1-$numero2;
        } elseif ($operacao == "*"){
            echo $numero1*$numero2;
        } elseif ($operacao == "/"){
            echo $numero1/$numero2;
        };
    ?>
</body>
</html>