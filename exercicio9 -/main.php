<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // 2.	Escreva um programa que leia 4 valores inteiros entre 1 e 10 e insira-os numa matriz. Depois, o utilizador deverá indicar um valor e o programa deverá 
        //indicar em que posição ou posições onde se en contra esse mesmo valor. Se o valor não existir na matriz o programa deverá dar a respetiva mensagem.

        $numeros = [];
        $numero1 = $_GET["numero1"];
        $numero2 = $_GET["numero2"];
        $numero3 = $_GET["numero3"];
        $numero4 = $_GET["numero4"];
        $numeroBusca = $_GET["numeroBusca"];

        for ($i=1; $i<=4; $i++){
            $numeros[]=${"numero".$i};
        }

        $key = array_search($numeroBusca, $numeros);
        if ($key){
        echo "O número $numeroBusca está localizado na posição $key.";
        } else {
            echo "Esse número não está no array.";
        }
        var_dump($numeros);
    ?>
    
</body>
</html>