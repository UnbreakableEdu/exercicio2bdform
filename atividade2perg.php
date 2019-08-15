<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 2</title>
    </head>
    <body>
        <form method="POST" action="atividade2resp.php" id="form-box">
            <div id="form-title-box">
                <h1 id="form-title">Cadastro</h1>
            </div>
            <div id="main-content">
                <p class="p-items">
                    <label for="nomecompleto">Nome Completo: </label>
                    <input type="text" name="nomecompleto" id="nomecompleto" class="input-items" required>
                </p>
                <p class="p-items">
                    <label for="idade">Idade: </label>
                    <input type="number" name="idade" id="idade" class="input-items" required>
                </p>
            </div>
            <div id="submit-button-box">
                <input type="reset" class="submit-buttons" id="reset">
                <input type="submit" class="submit-buttons" id="submit">
            </div>
        </form>
    </body>
</html>