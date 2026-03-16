
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
    $dia = 30;
    $mes = 8;
    $ano = 2023;
    
    if ($dia >= 1 && $dia <= 31 && $mes >= 1 && $mes <= 12) {
            echo "<br> A data é $dia de " . $lista[$mes] . " de $ano.";
    } else {
            echo "<br> Dia ou mês inválido.";
    }    

    // Exercício 1.
    $horas = 8;
    $valor_hora = 50;
    $valor = $horas * 5 * $valor_hora * 4;
    echo "<br> o valor recebido pelo funcionário é R$ ". $valor;

    // Exercício 2
    $num1 = 10;
    $num2 = 10;
    $num3 = 9;
    $maior = 0;
    if ($num1 > $num2 or $num1 > $num3){
        $maior = $num1;
        echo "<br>O maior número é " .$maior;
    }else if ($num2 > $num1 or $num2 > $num3){
        $maior = $num2;
        echo "<br>O maior número é " .$maior;
    }else{
        $maior = $num3;
        echo "<br>O maior número é " .$maior;
    } 
    //Exercício 3
    $sexo = "m";
    if (strtoupper($sexo) == "M"){
         $alt = 1.8;
         $formula = (72.7*$alt) - 58;
         echo "<br> O peso ideal para homem é ".$formula . "Kg";
    }
    else{
        $alt = 1.8;
        $formula = (62.1*$alt) - 44.7;
        echo "<br> O peso ideal para mulher é ".$formula ."Kg";
    }
    //Exercício 4
    $nota1 = 10;
    $nota2 = 9;
    $nota3 = 7.5;
    $media = 0;
    
    if ($nota1 > 10 or $nota2 > 10 or $nota3 > 10){
        echo "<br>Nota inválida";
    }
    else if ($nota1 < 0 or $nota2 < 0 or $nota3 < 0){
        echo "<br>Nota inválida";
    }
    else{
        $media = ($num1+$num2+$num3) / 3;
        echo "<br>Média final é ". round($media,1);
    }
   //Exercício 5
   $peso_pessoa = 93;
   $altura = 1.83;
   $elevado = $altura*$altura;
   $imc = $peso_pessoa / $elevado;
   echo "<br>Seu imc é " . round($imc,2);
   if ($imc < 18.5){
    echo " / Magreza.";
   } else if ($imc < 24.5){
    echo " / Normal.";
   }
   else if ($imc < 29.9){
    echo " / Sobrepeso.";
   }
   else if ($imc < 39.9){
    echo " / Obesidade.";
   }
    else{
        echo " / Obesidade Grave";
    }
 
   //Exercício 6
   $chico = 0.8;
   $juca = 0.6;
   $ano = 0;
   while($juca < $chico){
    $juca = $juca + 0.09;
    $chico = $chico + 0.06;
    $ano++;
    
   }
   echo "<br>Foram necessários ". $ano . " anos para Juca ultrapassar Chico na altura";

   
?>
