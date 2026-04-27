<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando novo Aluno</title>
</head>
<style>
    body{
        height:100vh;
        display:flex;
        justify-content:center;
        align-items:center;
        background-image: url(../img/shrek-fundo-site.jpg);
        color:white;
    }
    ./* Caixa principal */
#form-estudante {
    padding: 20px 30px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    width: 350px;
}

/* Fieldset */
.style-legend {
    border: none;
}

/* Título */
legend {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 15px;
    color: #333;
}

/* Inputs gerais */
.aluno,
select {
    width: 100%;
    padding: 8px;
    margin: 6px 0 12px 0;
    border: 1px solid #ccc;
    border-radius: 6px;
    transition: 0.3s;
}

/* Efeito ao clicar */
.aluno:focus,
select:focus {
    border-color: #4a90e2;
    outline: none;
}

/* Radio e checkbox */
input[type="radio"],
input[type="checkbox"] {
    margin-right: 5px;
    margin-top: 8px;
}

/* Labels inline */
span {
    margin-right: 10px;
}

/* Botão */
input[type="submit"] {
    width: 100%;
    padding: 10px;
    background: #4a90e2;
    border: none;
    color: white;
    font-weight: bold;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s;
}

/* Hover botão */
input[type="submit"]:hover {
    background: #357abd;
}

/* Espaçamento extra */
#caixa-aluno {
    font-size: 14px;
    background-color: rgba(255,255,255,0.8);
    padding: 20px 30px;
    border-radius: 10px;
    width: 350px;    
    color: #555;
}
   
.grupo {
    margin-bottom: 15px;
}

.opcao {
    display: flex;
    align-items: center;
    gap: 8px; /* espaço entre o input e o texto */
    margin-bottom: 5px;
    cursor: pointer;
}

.opcao input {
    margin: 0;
}
</style>
<body>
    <form action="cad_aluno.php" method="post" id="form-estudante">
        <fieldset class="style-legend">
            <legend>Adicionando novo estudante</legend>
             <div id="caixa-aluno">
                 Nome: <input type="text" class="aluno" name="nome_aluno"><br>
                 Nascimento: <input type="date" class="aluno" name="nasc_aluno"><br>
                 Email: <input type="email" class="aluno" name="email_aluno"><br>
                 Curso: <select name="curso_aluno" id="curso_aluno">
                    <option value="adm">Administração</option>
                    <option value="agro">Agropecuária</option>
                    <option value="info">Informática</option>
                 </select><br>
                 <div class="grupo">
    <span>Turno:</span><br>
    <label class="opcao">
        <input type="radio" name="turno_aluno" value="manha"> Manhã
    </label>
    <label class="opcao">
        <input type="radio" name="turno_aluno" value="tarde"> Tarde
    </label>
</div>
              <div class="grupo">
    <span>Áreas de interesse:</span>

    <label class="opcao">
        <input type="checkbox" name="pref_aluno[]" value="Programação">
        Programação
    </label>

    <label class="opcao">
        <input type="checkbox" name="pref_aluno[]" value="Banco de Dados">
        Banco de Dados
    </label>

    <label class="opcao">
        <input type="checkbox" name="pref_aluno[]" value="Redes de Computadores">
        Redes de Computadores
    </label>

    <label class="opcao">
        <input type="checkbox" name="pref_aluno[]" value="Engenharia de Software">
        Engenharia de Software
    </label>
</div>
 <input type="submit" name="enviar" value="Cadastrar aluno">
        </fieldset>
    </form>
</body>
</html>
