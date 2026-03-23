
<?php
  //Exercício 1:
 function validar($nota1){
    $recebe = "";
    if ($nota1 > 10){
        throw new Exception("Erro: A nota não pode ser maior que 10");
    } else if ($nota1 < 0){
        throw new Exception("Erro: Valor digitado é menor que 0");
    }
    if ($nota1 >= 9 && $nota1 <= 10){
        $recebe = "Aluno A <br>";
    } 
    else if ($nota1 < 9 && $nota1 >= 7){
        $recebe = "Aluno B <br>";
    }
    else if ($nota >= 5 && $nota <= 6.9){
        $recebe = "Aluno C <br>";
    } elseif ($nota >= 3 && $nota <= 4.9){
        $recebe = "Aluno D <br>";
    } else {
        $recebe = "Aluno F <br>";
    }
    return $recebe;
}

try {
    $nota1 = 8.9; // força erro
    echo validar($nota1);
    
} catch (Exception $e) {
    echo $e->getMessage();
}



   //Exercício 2
   for ($inicio = 0; $inicio < 500; $inicio ++){
    echo $inicio . " ";
    if ($inicio % 3 == 0){
        echo "Fizz <br>";
    }
    else if ($inicio % 5 == 0){
        echo "Buzz <br>";
    }
    else if ($inicio % 5 == 0 && $inicio % 3 == 0){
        echo "FizzBuzz<br>";
    }
   }

   //Exercício 3
   date_default_timezone_set("America/Sao_Paulo");

   $hora = date("H:i:s");
   if ($hora <= 13){
    echo "<br>Bom dia";
   }
   else if ($hora <= 18 ){
     echo "<br>Boa tarde";
   }
   else{
     echo "<br>Boa noite";
   }

   //Exercício 4
   $numeroDiaSemana = date("w"); // 0 (domingo) a 6 (sábado)
   $dia = date("d");             // dia do mês com 2 dígitos
   $numeroMes = date("n");       // mês sem zero à esquerda (1 a 12)
   $ano = date("Y");   
   $dias = [ "Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];
   $meses = [
    1 => "Janeiro",
    2 => "Fevereiro",
    3 => "Março",
    4 => "Abril",
    5 => "Maio",
    6 => "Junho",
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro"
   ];
   $dataExtenso = "<br>". $dias[$numeroDiaSemana]. "," . " ". $dia." de ". $meses[$numeroMes]." de ". $ano;
   echo $dataExtenso;
   //Exercício 5
   $termos = 10;

   $fib = [0, 1];

   for ($i = 2; $i < $termos; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
   }

echo "<br> Os primeiros 10 termos da sequência de Fibonacci são: ";
echo implode(", ", $fib); // Implode separa o array para pôr vírgulas

//Exercício 6
 $numeroPerfeito = 7;
 $somaDivisores = 0;
 for ($inicializador = 1; $inicializador < $numeroPerfeito; $inicializador ++){
    if($numeroPerfeito % $inicializador == 0){
        $somaDivisores += $inicializador;
    }
 }
   if ($somaDivisores == $numeroPerfeito) {
    echo "<br> $numeroPerfeito é um número perfeito";
} else {
    echo "<br>$numeroPerfeito não é um número perfeito";
}
?>