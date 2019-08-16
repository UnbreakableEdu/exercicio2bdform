<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Exercício 1
        </title>
    </head>

    <body>
        <div id="main-content">
            <div id="main-content-title">
                <h1>
                    Todos os Dados inseridos
                </h1>
            </div>

            <div id="main-table">
                <table>
                    <tr>
                        <td>
                            <b>
                                Membro
                            </b>
                        </td>

                        <td width="22">
                            &nbsp;
                        </td>

                        <td>
                            <b>
                                E-mail
                            </b>
                        </td>

                        <td width="22">
                            &nbsp;
                        </td>

                        <td>
                            <b>
                                Escola
                            </b>
                        </td>

                        <td width="22">
                            &nbsp;
                        </td>

                        <td>
                            <b>
                                Estado
                            </b>
                        </td>

                        <td width="22">
                            &nbsp;
                        </td>

                        <td>
                            <b>
                                Cidade
                            </b>
                        </td>

                        <td width="22">
                            &nbsp;
                        </td>

                        <td>
                            <b>
                                Função
                            </b>
                        </td>

                        <td width="22">
                            &nbsp;
                        </td>

                        <td>
                            <b>
                                Nome da Equipe
                            </b>
                        </td>
                    </tr>

                    <?php
                        $host            = 'localhost';
                        $user            = 'aluno';
                        $password        = 'aluno';
                        $name            = 'atv_prt_041_bd';
                        $link      = mysqli_connect($host, $user, $password, $name) or die("Error connecting to MySQL Server.");
                        $view     = "SELECT nome_membro, email, nome, cidade, estado, funcao, team.nome_equipe FROM members, school, team WHERE school.nome = members.escola AND members.nome_equipe = team.nome_equipe";
                        $commit       = mysqli_query($link, $view) or die("Error MySQL querying!");
                        while ($dados = mysqli_fetch_assoc($commit)) 
                        {
                            $viewinsert[] = $dados;
                        }
                                if ($viewinsert) 
                                {
                                    foreach ($viewinsert as $data) 
                                {
                                ?>

                                <tr>
                                <td>
                                <?php echo($data["nome_membro"]) ?>
                                </td>

                                <td width="22">
                                &nbsp;
                                </td>

                                <td>
                                <?php echo($data["email"]) ?>
                                </td>

                                <td width="22">
                                &nbsp;
                                </td>

                                <td>
                                <?php echo($data["nome"]) ?>
                                </td>

                                <td width="22">
                                &nbsp;
                                </td>

                                <td>
                                <?php echo($data["estado"]) ?>
                                </td>

                                <td width="22">
                                &nbsp;
                                </td>

                                <td>
                                <?php echo($data["cidade"]) ?>
                                </td>

                                <td width="22">
                                &nbsp;
                                </td>

                                <td>
                                <?php echo($data["funcao"]) ?>
                                </td>

                                <td width="22">
                                &nbsp;
                                </td>

                                <td>
                            <?php echo($data["nome_equipe"]) ?>
                            </td>
                            </tr>

                            <?php
                        }
                    }
                ?>
                </table>

                <div id="registry-box">
                <a href="index.php">
                    Inserir mais dados
                </a>
                </div>

                <?php
                mysqli_close($link);
            ?>
        </div>
    </body>
</html>