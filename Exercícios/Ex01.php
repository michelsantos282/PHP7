<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    <body>

        <?php
            $idade = 65;
            $peso = 69;

            //echo ($idade >= 16 && $idade <= 69) && $peso > 50 ? 
            //'Atende aos requisitos' : 'Não atende aos requisitos';

            if( ($idade >= 16 && $idade <= 69) && $peso > 50) {
                echo 'Atende aos Requisitos';
            } else {
                echo 'Não atende aos requisitos';
            }
        ?>

    </body>
    </html>