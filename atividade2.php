<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 2</title>
    </head>

    <body>
        <h1>
            Todos os dados inseridos
        </h1>
   
        <?php
            $host = 'localhost'; 
            $user = 'aluno'; 
            $password = 'aluno'; 
            $dbName = 'atv_prt_042_bd';
            $link = mysqli_connect($host, $user, $password, $dbName) or die('Unable to connect');
            $view     = "SELECT testeID, nome, idade FROM teste1 ORDER BY nome ASC";
            $commit     = mysqli_query($link, $view) or die('Error in Query'); 
            while ($dados = mysqli_fetch_assoc($commit)) {
                $viewinsert[] = $dados;
            }
        ?>

        <table>
            <tr>
                <td>
                    <b>Código</b>
                </td>

                <td width="22">
                &nbsp;
                </td>

                <td>
                    <b>Nome Completo</b>
                </td>
                
                <td width="22">
                &nbsp;
                </td>
                
                <td>
                    <b>Idade</b>
                </td>

                <td width="22">
                &nbsp;
                </td>
            </tr>

            <?php 
                if ($viewinsert) {
                    foreach ($viewinsert as $viewinserttotal) {
                        ?>

                        <tr>
                        <td>
                        <?php echo($viewinserttotal["testeID"]) ?>
                        </td>
                                
                        <td width="22">
                        &nbsp;
                        </td>
                            
                        <td>
                        <?php echo($viewinserttotal["nome"]) ?>
                        </td>

                        <td width="22">
                        &nbsp;
                        </td>

                        <td>
                        <?php echo($viewinserttotal["idade"]) ?>
                        </td>
                        </tr>

                        <?php
                    }
                }
            ?>
    </body>
</html>