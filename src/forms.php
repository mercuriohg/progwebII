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
        background-image: url(img/shrek-fundo-site.jpg);
        color:white;
    }
    .style-legend{
        width: 400px;
        height: 400px;
        border-radius:20px;
    }
   #form-estudante{
    background-color: rgba(0,0,0,0.5);
    border-radius:20px;
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
                 Turno: <input type="radio" class="aluno" name="turno_aluno" value="manha">Manhã<input type="radio" name="turno_aluno" value="tarde">Tarde<br>
                 Áreas de interesse: <br> <input type="checkbox" class="aluno" name="pref_aluno[]" value="Programação"> Programação <br>
                 <input type="checkbox" class="aluno" name="pref_aluno[]" value="Banco de Dados"> Banco de Dados <br>
                 <input type="checkbox" class="aluno" name="pref_aluno[]" value="Redes de Computadores"> Redes de Computadores <br>
                 <input type="checkbox" class="aluno" name="pref_aluno[]" value="Engenharia de Software"> Engenharia de Software <br>
                 <input type="submit" name="enviar" value="Cadastrar aluno">
             </div>

        </fieldset>
    </form>
</body>
</html>
