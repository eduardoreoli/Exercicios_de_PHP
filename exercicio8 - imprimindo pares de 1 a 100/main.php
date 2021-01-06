<?php
    $numerosPares = []; //cria o array

    for ($i=0; $i<=100; $i++){
        if ($i%2==0){
            $numerosPares[]=$i; 
        }
    
    }
    
    foreach($numerosPares as $numerosPares){
        echo $numerosPares.", ";
    }

    // ou

    // print_r($numerosPares);
?>