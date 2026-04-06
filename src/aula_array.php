<?php
   	$func1 = array(
		"nome"	=> "Thiago",
		"nascimento" => "22/01/1999",
		"residencia" => "Rolante", 
		"cargo"	=> "Desenvolvedor web",
		"salario" => 6201.8
	);
    //Criando variável global
    $empresa = "Sami Sistemas";

    //Criando função para exibir um funcionário
    function mostrarUser($funcionario){
        echo "Nome: $funcionario[nome] <br>";
        echo "Nascimento: $funcionario[nascimento] <br>";
        echo "Moradia: $funcionario[residencia] <br>";
        echo "Cargo: $funcionario[cargo] <br>";
        echo "Salário: $funcionario[salario] <br>";
        //Acessando a variável global
        echo "Empresa: $GLOBALS[empresa]<br><br>";
        //Essa linha abaixo aparece um warning no navegador
        //echo "Empresa: $empresa<br>;"
    }
    mostrarUser($func1);

    //Exemplo de uma função com retorno
    function multiplicar($n1, $n2){
        return $n1 * $n2; // Se não aparecer o return, o valor não retorna pra function.
    }
    $resultado = multiplicar(10,10);
    echo "O resultado é $resultado"
?>