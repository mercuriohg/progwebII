<?php 
    // Exercício 2
    $array_num = [1, 20, 40, 50, 60, 80, 200, 80, 10, 70];
    $maior = $array_num[0];
    foreach($array_num as $num){
        if ($num > $maior){
            $maior = $num;
        }
    }
    echo $maior;
    echo "<hr>";

    //Exercício 3
    $array_frutas = ["Maçã", "Abacate", "Pêra", "Banana", "Morango"];
    for ($i = 0; $i < count($array_frutas); $i++){
        echo $i+1 . " - " . $array_frutas[$i] . "<br>";
    }
    echo "<hr>";

    //Exercício 4
    $array_palavras = ["Frozen", "Abecê", "Frozen", "Grêmio","Internacional", "Grêmio"];
    foreach( $array_palavras as $quant_palavras){
        $contagem = array_count_values($array_palavras); // array_count_values(). Tem que pegar o array inteiro para fazer a contagem 
    }
    print_r($contagem);

?>