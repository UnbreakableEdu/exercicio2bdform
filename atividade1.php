<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Exercício 1
        </title>
    </head>

    <body>
        <div class="view-content">
            <table>
                <tr>
                    <td>
                        <b>
                            Nome
                        </b>
                    </td>

                    <td width="20">
                        &nbsp;
                    </td>

                    <td>
                        <b>
                            Escola
                        </b>
                    </td>

                    <td width="20">
                        &nbsp;
                    </td>

                    <td>
                        <b>
                            Função
                        </b>
                    </td>

                    <td width="20">
                        &nbsp;
                    </td>

                    <td>
                        <b>
                            E-Mail
                        </b>
                    </td>

                    <td width="20">
                        &nbsp;
                    </td>

                    <td>
                        <b>
                            Cidade
                        </b>
                    </td>

                    <td width="20">
                        &nbsp;
                    </td>

                    <td>
                        <b>
                            Estado
                        </b>
                    </td>
                </tr>

                <?php
                    $host            = 'localhost';
                    $user            = 'aluno';
                    $password        = 'aluno';
                    $name            = 'atv_prt_041_bd';
                    $connection      = mysqli_connect($host, $user, $password, $name) or die("Unable connecting to MySQL Server!");
                    $view            = "SELECT name1, school_name, equip_name, function_school, email, city, state_local FROM members, school, equip WHERE school.name1 = members.school_name AND members.equip_name = equip.equip_name";
                    $commit         = mysqli_query($connection, $view) or die('Error in the commit processing.');
                    while ($rows = mysqli_fetch_assoc($commit)) 
                    {
                        $variavelrow[] = $rows;
                    }
                        if ($variavelrow) 
                        {
                            foreach ($variavelrow as $data) 
                            {
                                ?>

                                    <tr>
                                        <td>
                                            <?php echo($data["name1"]) ?>
                                        </td>

                                        <td width="80">
                                            &nbsp;
                                        </td>

                                        <td>
                                            <?php echo($data["school_name"]) ?>
                                        </td>

                                        <td width="80">
                                            &nbsp;
                                        </td>

                                        <td>
                                            <?php echo($data["equip_name"]) ?>
                                        </td>

                                        <td width="80">
                                            &nbsp;
                                        </td>

                                        <td>
                                            <?php echo($data["function_school"]) ?>
                                        </td>

                                        <td width="80">
                                            &nbsp;
                                        </td>

                                        <td>
                                            <?php echo($data["email"]) ?>
                                        </td>

                                        <td width="80">
                                            &nbsp;
                                        </td>

                                        <td>
                                            <?php echo($data["city"]) ?>
                                        </td>

                                        <td width="80">
                                            &nbsp;
                                        </td>

                                        <td>
                                            <?php echo($data["state_local"]) ?>
                                        </td>
                                    </tr>

                                <?php
                            }
                        }
                ?>
            </table>
        </div>
    </body>
</html>