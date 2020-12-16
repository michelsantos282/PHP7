<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    <body>


    <h3>Pós-Incremento</h3>
    <?php 

        $a = 7;
        echo "O valor contido em a é $a <br />";
        echo 'O valor contido em a  após o incremento é '. $a++  . ' <br />';
        echo "O valor atualizado é $a <br />";


    ?>

    <h3>Pré-Incremento</h3>
    <?php 

        $a = 7;
        echo "O valor contido em a é $a <br />";
        echo 'O valor contido em a pré incremento é '. ++$a  . ' <br />';
        echo "O valor atualizado é $a <br />";


    ?>

    <h3>Pós-Decremento</h3>
    <?php 

        $a = 7;
        echo "O valor contido em a é $a <br />";
        echo 'O valor contido em a pós decremento é '. $a--  . ' <br />';
        echo "O valor atualizado é $a <br />";
  ?>

    <h3>Pré-Decremento</h3>
    <?php 

        $a = 7;
        echo "O valor contido em a é $a <br />";
        echo 'O valor contido em a  pré decremento é '. --$a  . ' <br />';
        echo "O valor atualizado é $a <br />";


    ?>


    </body>
    </html>