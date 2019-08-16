<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 3</title>
    </head>
    <body>
        <form method="POST" action="atividade3resp.php" id="form-box">
            <div id="form-title-box">
                <h1 id="form-title">Cadastro</h1>
            </div>
            <div id="main-content">
                <p class="p-items">
                    <label for="nomecomp">Fabricante: </label>
                    <input type="text" name="nomecomp" id="nomecomp" class="input-items" required>
                </p>
                <p class="p-items">
                    <label for="anofabricacao">Ano de Fabricação: </label>
                    <input type="number" name="anofabricacao" id="anofabricacao" class="input-items" required>
                </p>
                <p class="p-items">
                    <label for="quilometragem">Quilometragem (Km): </label>
                    <input type="number" name="quilometragem" id="quilometragem" class="input-items" required>
                </p>
            </div>
            <div id="submit-button-box">
                <input type="reset" class="submit-buttons" id="reset">
                <input type="submit" class="submit-buttons" id="submit">
            </div>
        </form>
    </body>
</html>