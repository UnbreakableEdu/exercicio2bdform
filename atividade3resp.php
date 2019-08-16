<?php
    $dbHost     = 'localhost';
    $dbUser     = 'aluno';
    $dbPassword = 'aluno';
    $dbName     = 'atv_prt_043_bd'; 
    $link       = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
    $fabricante = $_POST['nomecomp'];
    $ano_fabr   = $_POST['anofabricacao'];
    $quilo      = $_POST['quilometragem'];
    $insert     = "INSERT INTO autos (fabricante, ano_fabricacao, quilometragem) VALUES ('$fabricante', '$ano_fabr','$quilo')";
    $commit     = mysqli_query($link, $insert);
    mysqli_close($link);
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 3</title>
    </head>

    <body>
        <div class="main-content">
            <div class="main-content-title">
            <h1>Sucesso!<?php print $nome_comp ?></h1>
            </div>

            <div class="link-buttons">
            <a href="atividade3perg.php">Inserir novos dados</a>
            <a href="atividade3.php">Todos os Dados</a>
            </div>
        </div>
    </body>
</html>