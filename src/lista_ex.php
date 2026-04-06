<?php
  //Lista de Exercícios
  //Exercício 1
  echo "Exercício 1 <br>";
  function tabuada($numero){
     if ($numero > 10 || $numero < 0){
            return "Número inválido";
        }
     for ($i = 0; $i < 10; $i++){
        $val = $i+1;
        $mult = $val * $numero;
        echo $i+1 . " x $numero = $mult <br>";
       
        
    }
   }

 echo(tabuada(8)); 
 echo "<hr>";
   //Exercício 2
    echo "Exercício 2 <br>";
    function bissexto($ano){
       if($ano % 4 == 0 && $ano % 400 == 0 ){
         echo "O ano de $ano é bissexto";
       }
       else{
         echo "O ano de $ano não é bissexto";
       }
    }
 bissexto(1800);
 echo "<hr>";
   //Exercício 3
    echo "Exercício 3 <br>";
    function stringCont($string){
       $total = str_word_count($string); //str_word_count($string) conta o número de PALAVRAS em uma frase
       echo "O número total de palavras dessa frase é $total <br>";
       echo $string;

    }
stringCont("Tabuada é a parte mais essencial da matemática");
echo "<hr>";
   //Exercício 4
   echo "Exercício 4 <br>";
   function contarPalavra($frase, $palavra) {
    // Divide a frase em palavras
    $tokens = explode(" ", $frase);

    $contador = 0;

    // Percorre cada palavra
    foreach ($tokens as $token) {
        if ($token == $palavra) {
            $contador++;
        }
    }

    return "O número de palavras repetidas é $contador. A palavra é $palavra";
}

// Exemplo de uso
$frase = "o gato subiu no telhado e o gato miou";
$palavra = "gato";

echo contarPalavra($frase, $palavra); // 2
   
?>