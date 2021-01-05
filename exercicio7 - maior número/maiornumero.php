<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior número e posição na array</title>
</head>
<body>
    <?php
        $numero1 = $_GET["numero1"];
        $numero2 = $_GET["numero2"];
        $numero3 = $_GET["numero3"];
        $numero4 = $_GET["numero4"];
        $todosNumeros=[]; //cria um array
        for ($i=1; $i<=4; $i++){
            $todosNumeros[]=(${"numero".$i}); //vai contar de 1 a 4 e concatenar com a palavra "numero", que dentro de chaves irá se tornar o nome das variáveis criadas acima.
        }
        var_dump($todosNumeros);

        //achando o maior número
        $maiorNumero = max($todosNumeros);
        echo "O maior número é $maiorNumero, ";

        //achando a chave com array_search
        $key = array_search($maiorNumero, $todosNumeros);
        echo "e sua posição é $key dentro do array.";
    ?>
</body>
</html>