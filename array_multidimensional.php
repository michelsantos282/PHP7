<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php

            $listaCoisas = [];

            $listaCoisas['frutas'] = [1 =>'Banana', 2 => 'Morango',  3 => 'Maça', 4 => 'Uva'];
            $listaCoisas['pessoas'] = [1 => 'Gustavo', 2 => 'Tulio', 3=> 'Leticia', 4 => 'Michel'];

            echo '<pre>';
                print_r($listaCoisas);
            echo '</pre>';
        ?>

    </body>
    </html>