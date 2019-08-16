<?php
    $host                = 'localhost';
    $user                = 'aluno';
    $password            = 'aluno';
    $name                = 'atv_prt_041_bd';
    $link = mysqli_connect($host, $user, $password, $name) or die("Error connecting to MySQL Server.");
    $nome = $_POST['nomecompleto'];
    $email_usuario         = $_POST['email'];
    $numerousuario        = $_POST['numeroaluno'];
    $funcaoacademica      = $_POST['funcaoescolar'];
    $nomeescolaaluno   = $_POST['school-name'];
    $nometimealuno     = $_POST['team-name'];
    $team_name          = $_POST['team-name'];
    $nomeescola        = $_POST['school-name'];
    $estadoescola       = $_POST['school-state'];
    $cidadeescola        = $_POST['school-city'];
    $member_insert      = "INSERT INTO members(nome_membro, email, numero, funcao, escola, nome_equipe) VALUES ('$nome', '$email_usuario', '$numerousuario', '$funcaoacademica', '$nomeescolaaluno', '$nometimealuno')";
    $member_commit     = mysqli_query($link, $member_insert) or die("Error member commiting");
    $team_insert      = "INSERT INTO team(nome_equipe) VALUES ('$team_name')";
    $team_commit      = mysqli_query($link, $team_insert) or die("Error team commiting");
    $school_insert    = "INSERT INTO school (nome, estado, cidade) VALUES ('$nomeescola', '$estadoescola', '$cidadeescola')";
    $school_commit    = mysqli_query($link, $school_insert) or die("Error school commiting");
    mysqli_close($link);
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Exercicio 1
        </title>
    </head>

    <body>
        <div id="answer-content">
            <div id="answer-content-title-box">
                <h1 id="answer-content-title">
                    Sucesso!
                </h1>

                <p class="answer-content-p-box">
                    <a href="index.php">
                        Inserir outros dados
                    </a>

                    <br>
                    <br>

                    <a href="atividade1.php">
                    Todos os dados inseridos
                    </a>
                </p>
            </div>
        </div>
    </body>
</html>