<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positivo, negativo ou igual a zero</title>
</head>
<body>
    <?php
        $numero = $_GET["numero"];
        if ($numero > 0){
            echo "O número $numero é positivo.";
        } elseif ($numero < 0){
            echo "O número $numero é negativo.";
        } elseif ($numero == 0){
            echo "O número é zero.";
        }
    ?>
</body>
</html>