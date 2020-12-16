<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    <body>

    <?php 

    /*
        $num = 7.4;

        echo 'Arredondamento para cima '. ceil($num); // arredonda para cima
        echo '<br />';

        echo 'Arredondamento para baixo '. floor($num); // Arredonda para baixo
        echo '<br />';

        echo 'Arredondamento com base no valor decimal '.round($num); //Arredonda com base na fração .0 e .4 => baixo / .5 => pra cima
        echo '<br />';

        echo 'Gera um valor aleatório '. rand(10, 50); // de 0 até randmax
        echo '<br />';

        echo 'Funcão para obter o randmax '. getrandmax();
    */

    echo number_format(sqrt(259), 2, '.');

        

    ?>

    </body>
    </html>