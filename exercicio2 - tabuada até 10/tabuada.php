<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo da tabuada</title>
</head>
<body>
    <?php
        $numero = $_GET["numero"];
        for ($i=0; $i<=10; $i++){
            echo "$numero x $i = ".($numero*$i)."<br />";
        }
    ?>
</body>
</html>