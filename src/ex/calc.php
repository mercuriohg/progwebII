<?php
  $n1 = $_POST["num1"] ?? "";
  $n2 = $_POST["num2"] ?? "";
  $op = $_POST["calculadora"];

  if(is_numeric($n1) && is_numeric($n2)){
     echo "Os números selecionados foram ".$n1 ." ". $n2;
    
  }
  else{
      echo "Insira um valor válido";
  }
  if ($op == "+") echo " <br>". $n1+$n2;
  else if($op == "-") echo " <br>". $n1-$n2;
  else if($op == "/") echo " <br>". number_format($n1/$n2, 2);
  else if($op == "x") echo " <br>". $n1*$n2;



?>