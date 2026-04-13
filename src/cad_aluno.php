<?php
   //Pegando o conteúdo da página
   $nome = $_POST["nome_aluno"];
   $nascimento = $_POST["nasc_aluno"];
   $email = $_POST["email_aluno"];
   $curso = $_POST["curso_aluno"];
   $turno = "";
   $interesse = "";
   $erros = [];
   //Código de validação
   if (empty($nome)){
     $erros[] = "Preencha o campo de nome";
   }
    if (empty($nascimento)){
     $erros[] = "Preencha o campo de nascimento";
   }
    if (empty($email)){
     $erros[] = "Preencha o campo de email";
   }
    if (empty($curso)){
     $erros[] = "Preencha o campo de curso";
   }
    if (empty($turno)){
     $erros[] = "Preencha o campo de turno";
   }
   if(empty($interesse)){
     echo "Não possui interesse em nenhuma área <br>";
   }else{
      $interesse = $_POST["pref_aluno"];
   }
   foreach($erros as $exibir){
    echo "$exibir <br>";
   }
   if(count($erros) == 0){
     //Printando os nomes nas telas
     echo "Nome: $nome <br>";
     echo "Nascimento: $nascimento <br>";
     echo "Email: $email <br>";
     echo "Curso: $curso <br>";
     echo "Turno: $turno <br>";
     echo "Área de preferência: <br>";
     foreach ($interesse as $areas){
      echo "$areas <br>";
     }
   }
 
?>