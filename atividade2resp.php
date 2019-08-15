<?php
    $dbHost     = 'localhost';
    $dbUser     = 'aluno';
    $dbPassword = 'aluno';
    $dbName     = 'atv_prt_042_bd'; 
    $link = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
    $nome_comp = $_POST['nomecompleto'];
    $idade     = $_POST['idade'];
    $insert = "INSERT INTO teste1 (nome, idade) VALUES ('$nome_comp', '$idade')";
    $commit = mysqli_query($link, $insert);
    mysqli_close($link);
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 2</title>
    </head>

    <body>
        <div class="main-content">
            <div class="main-content-title">
            <h1>Sucesso!<?php print $nome_comp ?></h1>
            </div>

            <div class="link-buttons">
            <a href="atividade2perg.php">Inserir novos dados</a>
            <a href="atividade2.php">Todos os Dados</a>
            </div>
        </div>
    </body>
</html>