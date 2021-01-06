<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somando números</title>
</head>
<body>
    <?php

        $numeros=[];
            for ($i=1; $i<=4; $i++){
                ${"numero".$i} = $_GET["numero".$i];
                $numeros[]=${"numero".$i};
            }
        var_dump($numeros);

        $soma = array_sum($numeros);
        echo "O total dos números inseridos na matriz é $soma.";
    ?>
</body>
</html>