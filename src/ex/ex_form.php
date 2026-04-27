<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    
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
<body>
    <div class="caixa-form">
        <h2>Ímpar ou Par</h2>
        <form action="validate.php" method="get" class="style-form">
            <div>
                <label>Impar ou Par: </label>
                <input type="number" placeholder="Validação" name="numero">
                <input type="submit" name="enviar" value="Impar ou Par">
            </div>
            <label value="mostrar_resultado"></label>
        </form>
    </div>
    
    <div class="caixa-form">
        <h2>Calculadora</h2>
        <form action="calc.php" method="post" class="style-form">
            <input type="number" placeholder="Número 1: " name="num1" step="any">
            <input type="number" placeholder="Número 2: " name="num2" step="any">
            <select name="calculadora" id="calc">
                    <option value="+">Somar</option>
                    <option value="x">Multiplicar</option>
                    <option value="/">Dividir</option>
                    <option value="-">Subtrair</option>

            </select>
            <input type="submit" name="enviar" value="Calcular">

        </form>
    </div>
     <div class="caixa-form">
        <h2>Calculadora de IMC</h2>
        <form action="calc_imc.php" method="post" class="style-form">
            <input type="number" placeholder="Altura " name="altura" step="0.01" min="0" max="100">
            <input type="number" placeholder="Peso " name="peso" step="0.01" min="0" max="100">
            <input type="submit" name="enviar" value="Calcular IMC">

        </form>
    </div>
</body>
</html>