<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Análise de Hábitos</title>

<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background: #f2f4f8;
    margin: 0;
    padding: 20px;
}

.caixa {
    background: #fff;
    max-width: 450px;
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

label {
    font-size: 14px;
}

.resultado {
    margin-top: 15px;
    padding: 12px;
    border-radius: 8px;
    font-weight: bold;
    text-align: center;
    background: #e9f5ff;
}
</style>
</head>

<body>

<div class="caixa">
<h2>Análise de Hábitos Diários</h2>

<form method="post">
    <input type="text" name="nome" placeholder="Digite seu nome">

    <h4>Selecione seus hábitos:</h4>

    <label><input type="checkbox" name="habitos[]" value="Beber água"> Beber água</label>
    <label><input type="checkbox" name="habitos[]" value="Exercícios físicos"> Praticar exercícios físicos</label>
    <label><input type="checkbox" name="habitos[]" value="Dormir bem"> Dormir bem</label>
    <label><input type="checkbox" name="habitos[]" value="Alimentação saudável"> Alimentar-se de forma saudável</label>
    <label><input type="checkbox" name="habitos[]" value="Menos celular"> Evitar uso excessivo de celular</label>

    <input type="submit" name="enviar" value="Analisar hábitos">
</form>

<?php
if (isset($_POST["enviar"])) {

    $nome = trim($_POST["nome"] ?? "");
    $habitos = $_POST["habitos"] ?? [];

    if ($nome === "" || empty($habitos)) {
        echo "<div class='resultado' style='background:#f8d7da;color:#721c24;'>
                Informe seu nome e selecione pelo menos um hábito.
              </div>";
        exit;
    }

    $quantidade = count($habitos);

    if ($quantidade <= 1) {
        $classificacao = "Não saudável";
        $cor = "#f8d7da";
        $texto = "#721c24";
    } elseif ($quantidade <= 3) {
        $classificacao = "Moderado";
        $cor = "#fff3cd";
        $texto = "#856404";
    } else {
        $classificacao = "Saudável";
        $cor = "#d4edda";
        $texto = "#155724";
    }

    echo "<div class='resultado' style='background:$cor; color:$texto;'>";

    echo "<strong>Nome:</strong> $nome <br><br>";
    echo "<strong>Hábitos selecionados:</strong><br>";
    echo implode(", ", $habitos) . "<br><br>";
    echo "<strong>Total de hábitos:</strong> $quantidade <br>";
    echo "<strong>Classificação:</strong> $classificacao";

    echo "</div>";
}
?>

</div>

</body>
</html>