<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Exercicio 1
        </title>
    </head>
    <body>
        <div class="main-content">
            <form method="POST" action="atividade1resp.php">
                <div class="main-content-title-box">
                    <h1 id="main-content-title">
                        Cadastro Estudantil
                    </h1>
                </div>
                <fieldset id="member-fieldset" style="border:none">
                    <legend>
                        Membro
                    </legend>
                    <p class="p-input-box">
                        <input type="text" name="nomecompleto" class="inputs" placeholder="Nome Completo" id="nomecompleto" required>
                    </p>
                    <p class="p-input-box">
                        <input type="email" name="email" class="inputs" placeholder="Email" id="email" required>
                    </p>
                    <p class="p-input-box">
                        <input type="number" name="numeroaluno" class="inputs" placeholder="Número da Camisa" id="numeroaluno" required>
                    </p>
                    <p class="p-input-box">
                        <select name="funcaoescolar" class="inputs" id="funcaoescolar" required>
                        <optgroup>
                        <option value="Aluno">Aluno</option>
                        <option value="Docente">Corpo Docente</option>
                        <option value="Voluntario">Voluntário</option>
                        </optgroup>
                        </select>
                    </p>
                </fieldset>
                <fieldset id="team-fieldset" style="border:none">
                    <legend>
                        Equipe
                    </legend>
                    <p class="p-input-box">
                        <input type="text" name="team-name" class="inputs" placeholder="Nome da Equipe" id="team-name-input" required>
                    </p>
                </fieldset>
                <fieldset id="school-fieldset" style="border:none">
                    <legend>
                        Escola
                    </legend>
                    <p class="p-input-box">
                        <input type="text" name="school-name" class="inputs" placeholder="Nome da Escola" id="school-name-input" required>
                    </p>
                    <p class="p-input-box">
                        <input type="text" name="school-state" class="inputs" placeholder="Estado que a Escola está localizada" id="school-state-input" required>    
                    </p>
                    <p class="p-input-box">
                        <input type="text" name="school-city" class="inputs" placeholder="Cidade que a Escola está localizada" id="school-city-input" required>
                    </p>
                </fieldset>
                <div id="submit-buttons-box">
                    <p class="p-input-box">
                        <input type="reset" class="submit-buttons" id="reset-button">
                        <input type="submit" class="submit-buttons" id="submit-button">
                    </p>
                </div>
            </form>
        </div>
    </body>
</html>