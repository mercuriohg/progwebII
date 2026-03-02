
<?php
 $nome = "João";
 $sobrenome = "Silva";
 $idade = 30;
 $motorista = true;

 if ($motorista >= 18) {
     echo "O motorista é $nome $sobrenome, tem $idade anos e pode dirigir.";
 } else {
     echo "O motorista é $nome $sobrenome, tem $idade anos e não pode dirigir.";
 }
 echo "<br> $idade anos de idade";
   
  // Cálculo de média de frequência
  $freq_est = 120;
  $calc = ($freq_est/120) * 100;
    if($freq_est > 120) {
       echo "<br>Não foi possível calcular a frequência, pois o número de aulas assistidas é maior que o total de aulas.";
    } 
    elseif ($calc >= 75) {
        echo "<br> A frequência é de ". number_format($calc, 2) ."% e o aluno está aprovado.";
    }
    else {
        echo "<br> A frequência é de ". number_format($calc, 2) ."% e o aluno está reprovado.";
    }

// Verificador de número par ou ímpar
 $num = 7;
 if ($num % 2 == 0) {
     echo "<br> O número $num é par.";
 } else {
     echo "<br> O número $num é ímpar.";
 }

 // Verificador de número positivo, negativo ou zero
 $num_teste = -8;
    if ($num_teste > 0) {
        echo "<br> O número $num_teste é positivo.";
    } elseif ($num_teste < 0) {
        echo "<br> O número $num_teste é negativo.";
    } else {
        echo "<br> O número é zero.";
    }
    // Verificador de data
    $lista = ["", "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    $dia = 40;
    $mes = 8;
    $ano = 2023;
    
    if ($dia >= 1 && $dia <= 31 && $mes >= 1 && $mes <= 12) {
            echo "<br> A data é $dia de " . $lista[$mes] . " de $ano.";
    } else {
            echo "<br> Dia ou mês inválido.";
    }    
?>