<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php

            //Sequênciais (númericos)
        /*
            //$listaFrutas = array('Banana', 'Maça', 'Morango', 'Uva', 'Abacate');
            $listaFrutas = ['Banana', 'Maça', 'Morango', 'Uva', 'Abacate'];
            $listaFrutas[] = 'Abacaxi';

        
            echo '<pre>';
                var_dump($listaFrutas);
            echo '</pre>';

            echo '<hr />';

            echo '<pre>';
                print_r($listaFrutas);
            echo '</pre>';
        
        
            echo $listaFrutas[2];
        */

            //Associativos

            $listaFrutas = array(
                'a' => 'Banana', 
                'b' => 'Maça', 
                'x' => 'Morango', 
                'y' => 'Uva',
                '2' => 'Abacate');

                $listaFrutas['w'] = 'Abacaxi';

            echo '<pre>';
                var_dump($listaFrutas['w']);
            echo '</pre>';

           $listaFrutas['w'] = 'Abacaxi';

        ?>

    </body>
    </html>