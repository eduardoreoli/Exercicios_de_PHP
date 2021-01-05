<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Impar</title>
</head>
<body>
    <?php
        $numero = $_GET["numero"];
        if ($numero%2 == 0){
            echo "PAR";
        } else {
            echo "IMPAR";
        }
    ?>
    
</body>
</html>