<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<style>
    body {
    font-family: Arial, Helvetica, sans-serif;
    background: #f2f4f8;
    margin: 0;
    padding: 20px;
}

/* caixas dos formulários */
.caixa-form {
    background: #ffffff;
    max-width: 420px;
    margin: 20px auto;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

/* títulos */
.caixa-form h2 {
    text-align: center;
    margin-bottom: 15px;
    color: #333;
}

/* layout dos inputs */
.style-form {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

/* inputs e select */
.style-form input[type="number"],
.style-form select {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    outline: none;
    font-size: 14px;
}

/* foco nos inputs */
.style-form input:focus,
.style-form select:focus {
    border-color: #4a90e2;
    box-shadow: 0 0 5px rgba(74,144,226,0.4);
}

/* botão */
.style-form input[type="submit"] {
    background: #4a90e2;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 15px;
    transition: 0.2s;
}

.style-form input[type="submit"]:hover {
    background: #357bd8;
}

/* label do resultado */
label {
    display: block;
    text-align: center;
    margin-top: 10px;
    color: #555;
}
</style>
<?php
$resultado = 0;

if (isset($_POST["enviar"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["calculadora"];
    
    switch ($op) {
        case "+":
            $resultado = $num1 + $num2;
            break;
        case "-":
            $resultado = $num1 - $num2;
            break;
        case "x":
            $resultado = $num1 * $num2;
            break;
        case "/":
            $resultado = $num2 != 0 ? $num1 / $num2 : "Erro (divisão por zero)";
            break;
    }
}
?>
<body>
<div class="caixa-form">
        <h2>Calculadora</h2>
        <form method="post" class="style-form">
            <input type="number" placeholder="Número 1: " name="num1" step="any">
            <input type="number" placeholder="Número 2: " name="num2" step="any">
            <select name="calculadora" id="calc">
                    <option value="+">Somar</option>
                    <option value="x">Multiplicar</option>
                    <option value="/">Dividir</option>
                    <option value="-">Subtrair</option>

            </select>
            <input type="submit" name="enviar" value="Calcular">
            <label>   <?php echo $resultado; ?> </label>
        </form>
    </body>
  
</html>