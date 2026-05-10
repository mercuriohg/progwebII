<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Pedido de Lanche</title>

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

input, select {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 14px;
    width: 100%;
}

input:focus, select:focus {
    border-color: #4a90e2;
    box-shadow: 0 0 5px rgba(74,144,226,0.4);
    outline: none;
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
    margin: 0;
    font-size: 14px;
}

.resultado {
    margin-top: 15px;
    text-align: center;
    font-weight: bold;
    padding: 10px;
    border-radius: 8px;
}
</style>
</head>

<?php
function pedido(){

    if(isset($_POST["enviar"])){

        $nome = $_POST["nome"] ?? "";
        $pagamento = $_POST["pagamento"] ?? "";
        $itens = $_POST["itens"] ?? [];

        // preços
        $precos = [
            "hamburguer" => 15,
            "batata" => 10,
            "refrigerante" => 8,
            "sobremesa" => 12
        ];

        // validação
        if ($nome === "" || empty($itens)){
            echo "Informe o nome e selecione pelo menos um item.";
            return;
        }

        $total = 0;
        $listaItens = [];

        foreach($itens as $item){
            $total += $precos[$item];
            $listaItens[] = $item;
        }

        $desconto = 0;

        if($pagamento == "dinheiro"){
            $desconto = $total * 0.05;
        }

        $final = $total - $desconto;

        echo "<div class='resultado'>";
        echo "<strong>Cliente:</strong> $nome <br><br>";
        echo "<strong>Itens:</strong> " . implode(", ", $listaItens) . "<br>";
        echo "<strong>Total:</strong> R$ " . number_format($total,2,',','.') . "<br>";
        echo "<strong>Desconto:</strong> R$ " . number_format($desconto,2,',','.') . "<br>";
        echo "<strong>Final:</strong> R$ " . number_format($final,2,',','.') . "<br>";
        echo "</div>";
    }
}
?>

<body>

<div class="caixa">
<h2>Pedido de Lanche</h2>

<form method="post">

<input type="text" name="nome" placeholder="Seu nome">

<h4>Escolha os itens:</h4>

<label><input type="checkbox" name="itens[]" value="hamburguer"> Hambúrguer (R$15)</label><br>
<label><input type="checkbox" name="itens[]" value="batata"> Batata frita (R$10)</label><br>
<label><input type="checkbox" name="itens[]" value="refrigerante"> Refrigerante (R$8)</label><br>
<label><input type="checkbox" name="itens[]" value="sobremesa"> Sobremesa (R$12)</label><br>

<br>

<select name="pagamento">
    <option value="cartao">Cartão</option>
    <option value="dinheiro">Dinheiro (5% desconto)</option>
</select>

<input type="submit" name="enviar" value="Finalizar pedido">

</form>

<?php pedido(); ?>

</div>

</body>
</html>