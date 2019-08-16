<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 3</title>
    </head>

    <body>
        <h1>
            Todos os dados inseridos
        </h1>
   
        <?php
            $host = 'localhost'; 
            $user = 'aluno'; 
            $password = 'aluno'; 
            $dbName = 'atv_prt_043_bd';
            $link = mysqli_connect($host, $user, $password, $dbName) or die('Unable to connect');
            $view     = "SELECT auto_id, fabricante, ano_fabricacao, quilometragem FROM autos ORDER BY fabricante ASC";
            $commit     = mysqli_query($link, $view) or die('Error in Query'); 
            while ($dados = mysqli_fetch_assoc($commit)) {
                $viewinsert[] = $dados;
            }
        ?>

        <table>
            <tr>
                <td>
                    <b>ID do Automóvel</b>
                </td>

                <td width="22">
                &nbsp;
                </td>

                <td>
                    <b>Fabricante</b>
                </td>
                
                <td width="22">
                &nbsp;
                </td>
                
                <td>
                    <b>Ano de Fabricação</b>
                </td>

                <td width="22">
                &nbsp;
                </td>

                <td>
                    <b>Quilometragem</b>
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
                        <?php echo($viewinserttotal["auto_id"]) ?>
                        </td>
                                
                        <td width="22">
                        &nbsp;
                        </td>
                            
                        <td>
                        <?php echo($viewinserttotal["fabricante"]) ?>
                        </td>

                        <td width="22">
                        &nbsp;
                        </td>

                        <td>
                        <?php echo($viewinserttotal["ano_fabricacao"]) ?>
                        </td>

                        <td width="22">
                        &nbsp;
                        </td>

                        <td>
                        <?php echo($viewinserttotal["quilometragem"]) ?>
                        </td>
                        </tr>

                        <?php
                    }
                }
            ?>
    </body>
</html>