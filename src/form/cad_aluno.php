<?php
   //Pegando o conteúdo da página
   $nome = $_POST["nome_aluno"];
   $nascimento = $_POST["nasc_aluno"];
   $email = $_POST["email_aluno"];
   $curso = $_POST["curso_aluno"];
   $turno = $_POST["turno_aluno"];
   $erros = [];

	// Validação dos campos obrigatórios
	// empty() verifica se o campo está vazio ("", null, etc.)
	if (empty($nome))
		$erros[] = "Preencha o nome";

	if (empty($nascimento))
		$erros[] = "Preencha a data de nascimento";

	if (empty($email))
		$erros[] = "Preencha o email";

	// Validação da senha
	if (empty($curso)){
		$erros[] = "Preencha o curso";
	} 

	if (empty($turno)){
		$erros[] = "Preencha o turno";
	}

	// Se houver erros, exibe todos na tela
	if (count($erros) > 0){
		// Percorre o array de erros e imprime cada mensagem
		foreach ($erros AS $erro){
			echo ("$erro<br>");
		}
	} else {
		// Caso não haja erros, exibe os dados informados pelo usuário
		echo ("Todos os campos foram preenchidos corretamente: foi digitado os seguintes valores <br>");
		echo ("Nome: $nome <br>");
		echo ("Data de nascimento: $nascimento <br>");
		echo ("Email: $email <br>");
		echo ("Curso: $curso <br>");
		echo ("Turno: $turno <br>");


	}
 
?>