<?php
  $numero = $_GET["numero"];

  if (empty($numero)) echo "Preencha o campo";
  if ($numero % 2 == 0) echo "$numero é par.";
  else{
    echo "$numero é impar.";
  }
?>