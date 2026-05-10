<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Final</title>
</head>
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background: #f2f4f8;
    margin: 0;
    padding: 20px;
}

.caixa {
    background: #fff;
    max-width: 420px;
    margin: 40px auto;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

h2 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 14px;
}

input:focus {
    border-color: #4a90e2;
    box-shadow: 0 0 5px rgba(74,144,226,0.4);
}

input[type="submit"] {
    background: #4a90e2;
    color: white;
    border: none;
    cursor: pointer;
    transition: 0.2s;
}

input[type="submit"]:hover {
    background: #357bd8;
}

.resultado {
    margin-top: 15px;
    text-align: center;
    font-weight: bold;
    padding: 10px;
    border-radius: 8px;
}

/* cores por status */
.aprovado {
    background: #d4edda;
    color: #155724;
}

.recuperacao {
    background: #fff3cd;
    color: #856404;
}
label{margin:auto;}
.reprovado {
    background: #f8d7da;
    color: #721c24;
}
</style>
<?php
 function media(){
   if (isset($_POST["enviar"])) {
    $nome =  $_POST["nome"];
    $num1 = (float) $_POST["num1"];
    $num2 = (float) $_POST["num2"];
    $num3 = (float) $_POST["num3"];
    $lista = [$num1,$num2,$num3];
    $media = ($num1+$num2+$num3) / 3;
    if($nome === "" || $num1 === "" || $num2 === "" || $num3 === ""){
        echo "Algum campo está vazio";
    }else{
        if ($media >= 7){
        echo $nome . " está aprovado". " com média ". number_format($media,1). " com sua maior nota sendo " . max($lista);

    } else if ($media < 7 && $media >= 1.8){
        echo $nome . " está de recuperação". " com média ". number_format($media,1). " com sua maior nota sendo " . max($lista);

    }else{
        echo $nome . " 4eprovado com média ". number_format($media,1). " com sua maior nota sendo " . max($lista);
    }
    }
    
 }}

?>
<body>
     <form method="post" class="style-form">
            <input type="text" name="nome" placeholder="Nome:">
            <input type="number" placeholder="Número 1: " name="num1"  min="0" max="10" step="any">
            <input type="number" placeholder="Número 2: " name="num2"  min="0" max="10" step="any">
            <input type="number" placeholder="Número 3: " name="num3"  min="0" max="10" step="any">


            <input type="submit" name="enviar" value="Media Final">
            <label> <?php media();?></label>
</form>
</body>
</html>