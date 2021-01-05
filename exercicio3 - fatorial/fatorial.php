<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    <?php
        $numero = $_GET["numero"];
        
        if($numero>0){
            $valor = $numero;
            for($i=($valor-1);$i>0;$i--){
                $valor=$valor*$i;
            }
        } else {
                $valor=0;
            }
        

        echo "!$numero = $valor";
    ?>
</body>
</html>